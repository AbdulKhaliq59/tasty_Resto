<?php

$SERVER = "127.0.0.1";
$user = "root";
$password = "";
$db = "dbconnect";
$connection = mysqli_connect($SERVER, $user, $password, $db);

if (!$connection) {
    echo "Connection Failed: " . mysqli_connect_error();
} else {
    echo "Connected successfully!";
}

?>
