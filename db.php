<?php
// Database configuration
$servername = "localhost";   // or 127.0.0.1
$username   = "root";        // default for XAMPP/WAMP
$password   = "";            // default for XAMPP/WAMP is empty
$dbname     = "supply_user";       // change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

