<?php

    // Uncomment this if you want to see all PHP errors on your site.
    // error_reporting(E_ALL);
    // ini_set("display_errors", "on");

    $uid = 'ENTER_USERNAME_HERE';
    $pwd = 'ENTER_PASSWORD_HERE';

    // For some reason using variables for host and dbname didn't work here, so just enter them directly in the statement.
    $conn = new PDO('mysql:host=ENTER_HOST_HERE;dbname=ENTER_DATABASE_NAME_HERE', $uid, $pwd);
?>