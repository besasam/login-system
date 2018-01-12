<!DOCTYPE html>

<?php 

    session_start();
    
    // If no login is detected, we create the session variable for the login flag and set it to false.
    if(!isset($_SESSION["loggedin"])) {
        $_SESSION["loggedin"] = false;
    }

    require_once "../config.php";

    // Set home.php as default page
    if(!isset($_GET["p"])) {
        $_GET["p"] = "home";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login System Test</title>
        <!-- oh yeah this uses Bootstrap because I was too lazy to write CSS but didn't want an ugly page -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    </head>
    
    <body>
        <!-- Get the requested page -->
        <?php require_once "pages/".$_GET["p"].".php"; ?>
        <!-- More Bootstrap stuff -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>