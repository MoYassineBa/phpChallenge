<?php
// PDO Database connection parameters
$servername = "localhost"; // Database host
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "feedback_system"; // Database name

// Create PDO connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
