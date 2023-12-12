<?php

require_once '../database/database-connection.php';

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
                echo 'success';
                // You may store other user information in the session if needed
// Redirect to the welcome page
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="rfid">RFID:</label>
    <input type="text" name="rfid" value="124151">
    <br><br>
    <input type="submit" value="Login"  >
</form>

<?php
if(isset($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>

</body>
</html>
