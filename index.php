<?php include('authenticate.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="authenticate.php" method="post">
        <div class="login">
            <h1>Login</h1>
            <label for="user">Username:</label>
            <input type="text" id="user" name="user"><br><br>

            <label for="pw">Password:</label>
            <input type="text" id="pw" name="pw"><br><br>
            
            <input type="submit" value="Sign In">
        </div>
    </form>
</body>

</html>

<?php 

?>