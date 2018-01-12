<?php 

    require_once "../app/fn_register.php"; 

    $createUser->execute();

?>

<div class="container">
    
    <h1>Register successful.</h1>
    <p><a href="index.php?p=login">Click here</a> to login.</p>
    
</div>