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
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}

// Variable declaration
$username = "";
$pw = "";

/*
// SQL Query to test database user fetch
$sql = 'SELECT Username, "Password", "Admin" FROM users ORDER BY Username;';
$res = pg_query($conn, $sql);
if (!$res) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_row($result)) {
    echo "User: $row[1]  Pass: $row[2] Is Admin: $row[3]";
    echo "<br />\n";
  }
  
*/

?>