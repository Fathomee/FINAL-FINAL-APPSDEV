<?php
require 'database/database-connection.php';

if (!empty($_POST)) {
    // Keep track of post values
    $name = $_POST['name'];  // Make sure to add an input field with name="name" in your form
    $id = $_POST['id'];
    $rfid = $_POST['rfid'];  // Make sure to add an input field with name="rfid" in your form

    // Insert data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM teacher (name, id, rfid) VALUES (?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($name, $id, $rfid));
    Database::disconnect();

    // Redirect to a success page or somewhere else
    header("Location: index.php");
    exit();
}
?>
