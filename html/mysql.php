<?php
$mysqli = new mysqli("db", "dilei", "Dl~147456", "mydb");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* Select queries return a resultset */
if ($result = $mysqli->query("SELECT name FROM user LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);
}

$mysqli->close();
?>
