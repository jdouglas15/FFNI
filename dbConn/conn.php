<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "FFNI";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>