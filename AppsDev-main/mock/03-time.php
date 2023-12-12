<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "jilian";
    $dbname = "demo"; // Change to your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve password from the form
    $enteredPassword = $_POST['password'];

    // Query to check if the password exists in the database
    $sql = "SELECT * FROM users WHERE password='$enteredPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Password matched, login successful
        header("Location: 01-aTime.php?login");
        exit(); // Make sure to exit after redirection

    } else {
        // Invalid password, redirect with a query parameter for error handling
        header("Location: 01-aTime.php?not-login");
        exit(); // Make sure to exit after redirection
    }
    $conn->close();
}
?>