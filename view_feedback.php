<?php
// Include the database connection
include 'db_connection.php'; // This file contains the PDO connection code

// Retrieve all feedback from the database
try {
    // Prepare a SELECT statement
    $sql = "SELECT * FROM feedback ORDER BY timestamp DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Display the feedback
    echo "<h1>Tous les commentaires</h1>";
    if ($stmt->rowCount() > 0) {
        // Fetch and display each feedback
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div>";
            echo "<strong>" . htmlspecialchars($row['name']) . "</strong> <small>le " . $row['timestamp'] . "</small>";
            echo "<p>" . htmlspecialchars($row['message']) . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "Aucun commentaire trouvé.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
