<?php

require_once 'database/database-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rfid = $_POST['rfid'];

    // Check if the PDO connection is valid
    if ($pdo) {
        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM teacher WHERE rfid = ?";
        $stmt = $pdo->prepare($sql);
        
        // Check if the statement is valid
        if ($stmt) {
            $stmt->execute([$rfid]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($result) {
                // RFID matched, login successful
                session_start();
                $_SESSION['loggedin'] = true;
                // You may store other user information in the session if needed
                header("Location: welcome.php"); // Redirect to the welcome page
                exit();
            } else {
                $error = "Invalid RFID. Please try again.";
            }

            // No need to close the statement with PDO
        } else {
            $error = "Error preparing SQL statement.";
        }
    } else {
        $error = "Error connecting to the database.";
    }
}

?>