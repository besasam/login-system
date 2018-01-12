<div class="container">

    <h1>Register</h1>
    
    <p><a href="index.php?p=home"><i class="fas fa-angle-left"></i> Back to Index</a></p>

    <form action="index.php?p=register2" method="post">
        <div class="form-group">
            <label for="un">Username</label>
            <input type="text" class="form-control" name="un" id="un" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="pw">Password</label>
            <input type="password" class="form-control" name="pw" id="pw" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="dn">Display Name</label>
            <input type="text" class="form-control" name="dn" id="dn" placeholder="Display Name" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    
</div>