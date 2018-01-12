<?php

    $login = $_POST["un"];
    $password = $_POST["pw"]; // I have no idea if this is safe or the password should be hashed immediately
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $name = $_POST["dn"];

    // No security checks. Just blindly inserts a new row into the table
    $createUser = $conn->prepare('INSERT INTO users (login, password, name) VALUES (:login, :password, :name)');
    $createUser->bindParam(':login', $login, PDO::PARAM_STR);
    $createUser->bindParam(':password', $hash, PDO::PARAM_STR);
    $createUser->bindParam(':name', $name, PDO::PARAM_STR);

?>