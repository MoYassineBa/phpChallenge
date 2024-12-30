<?php


// Include the database connection
include 'db_connection.php'; // This file contains the PDO connection code from above

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Insert feedback into the database
    try {
        // Prepare an INSERT statement
        $sql = "INSERT INTO feedback (name, message) VALUES (:name, :message)";
        $stmt = $conn->prepare($sql);

        // Bind parameters to the SQL query
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':message', $message);

        // Execute the statement
        $stmt->execute();

        echo "Feedback submitted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the connection (not strictly necessary with PDO, but for good practice)
$conn = null;
?>

