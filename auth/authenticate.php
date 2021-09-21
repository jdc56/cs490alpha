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
$res = pg_query($conn, $sql);
if (!$res) {
  echo "An error occurred.<br/>";
  exit;
}
else {
    echo "Query executed<br/>";
    if (pg_num_rows($result) == 0) {
        echo "0 records";
    }
       else {
        while ($row = pg_fetch_array($result)) {
          //do stuff with $row
          echo "User: $row[1]  Pass: $row[2] Is Admin: $row[3] <br/>";
        }
    }
}
/*
while ($row = pg_fetch_row($result)) {
    echo "User: $row[1]  Pass: $row[2] Is Admin: $row[3]";
    echo "<br />\n";
  }
  
*/

?>