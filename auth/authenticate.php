<?php

// Connect to Heroku Postgres database
try {$db = parse_url(getenv("DATABASE_URL"));
    $conn = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    echo "Database connection successful. <br/>";
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}

// Variable declaration
$username = "";
$pw = "";


// SQL Query to test database user fetch
$sql = 'SELECT Username, "Password", "Admin" FROM users ORDER BY Username;';
$res = $pdo->query($sql);
if(!$res) {
  echo "Query not executed. <br/>";
}
else {
  while ($row = $res->fetch()) {
    echo "User: " . $row['Username'] . "\nPass: " . $row['Password'] . "\nIs Admin: " . $row['Admin'] . "<br/>";
  }
}


?>