<div class="container">
    
    <h1>Login System Test</h1>

    <?php if($_SESSION["loggedin"]) { ?>
        <p>You are logged in as <?php echo $_SESSION["displayname"] ?>.</p>
    <?php } else { ?>
        <p>You are not logged in.</p>
    <?php } ?>
    
    <ul>
        <li><?php if($_SESSION["loggedin"]) { ?><a href="index.php?p=logout">Logout</a><?php } else { ?><a href="index.php?p=login">Login</a><?php } ?></li>
        <?php if(!$_SESSION["loggedin"]) { ?><li><a href="index.php?p=register">Register</a></li><?php } ?>
    </ul>

</div>