<?php
require_once '../extra/auth.php';
$currentUrl = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

if (! Auth::check()) {
    redirectTo('login?to=' . $currentUrl);
} 


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>My Simple Website</h1>

    <br>

    <div class="well">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis distinctio dolore
        eligendi enim fugit ipsa nemo odio odit quam quibusdam sapiente, voluptatum? Asperiores quis, rerum? Aperiam
        iusto nostrum repellat?
    </div>

    <?php if (Auth::check()): ?>
        <h1>Logged In</h1>  
    <?php else: ?>
       <h1>Not Logged In</h1>
    <?php endif; ?>
</div>

</body>
</html>