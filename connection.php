<?php

// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'testdb';

// Create a database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
