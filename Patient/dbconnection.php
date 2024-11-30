<?php
// Database configuration
$host = "localhost:3308"; // Hostname
$username = "root"; // Username
$password = ""; // Password
$database = "medicare"; // Database name

// Create a new MySQLi object
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    echo "Connection Failed";

}


?>
