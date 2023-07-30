<?php
// Database configuration
$db_host = "localhost";
$db_username = "username";
$db_password = "password";
$db_name = "sharktankblog";

// Connect to the database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
