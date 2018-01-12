<?php

    $login = $_POST["un"];
    $password = $_POST["pw"];

    // This doesn't check for anything yet, it just submits the entered login name and gets the corresponding row from the table.
    $getUser = $conn->prepare('SELECT * FROM users WHERE login = :login');
    $getUser->bindParam(':login', $login, PDO::PARAM_STR);
    $getUser->execute();
    $user = $getUser->fetch();

    // Check if the password entered is correct. If yes, set the login flag.
    $verify = password_verify($password, $user["password"]);
    if($verify) {
        $_SESSION["loggedin"] = true;
        $_SESSION["displayname"] = $user["name"];
    }

?>