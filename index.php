<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="" method=""> <!-- insert authenticate.php and method --> 
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
try {$db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    $conn = pg_connect(getenv("DATABASE_URL"));
    echo "Successfully connected to database " . $db . "<br/>";
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}
?>