<?php 

    require_once "../app/fn_login.php"; 

?>

<div class="container">
    
    <?php if($_SESSION["loggedin"]) { ?>
    <h1>Login successful.</h1>
    <p>You are now logged in as <b><?php echo $user["name"] ?></b>.</p>
    <p><a href="index.php?p=home"><i class="fas fa-angle-left"></i> Back to Index</a></p>
<?php } else { ?>
    <h1>Login unsuccessful.</h1>
    <p><a href="index.php?p=home"><i class="fas fa-angle-left"></i> Back to Index</a></p>
<?php } ?>
    
</div> 