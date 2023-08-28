<?php
require('../../connection.php');
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $insertQuery = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($connection, $insertQuery)) {
        echo "Data inserted successfully";
    } else {
        echo "Error" . mysqli_error($connection);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Php</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="text" name="password">
        <button type="submit" name="register">Register</button>
    </form>
</body>

</html>