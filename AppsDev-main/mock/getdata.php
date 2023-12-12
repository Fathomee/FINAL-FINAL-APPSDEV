<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Lookup</title>
  <style>
    .result-box {
      border: 1px solid #ccc;
      padding: 10px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Teacher Lookup</h1>
  <form method="post">
    <label for="rfid">Enter RFID:</label>
    <input type="text" name="rfid" id="rfid" required>
    <button type="submit">Lookup</button>
  </form>
  
<?php  
//Connect to database
require 'database-connection.php';

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Process form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rfid = $_POST["rfid"];

    // SQL query to retrieve teacher's name based on RFID
    $sql = "SELECT name FROM teacher WHERE rfid = '$rfid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Display the result in a box
      $row = $result->fetch_assoc();
      echo '<div class="result-box">';
      echo '  <strong>Name:</strong> ' . $row["name"];
      echo '</div>';
    } else {
      echo '<p>No matching record found for the given RFID.</p>';
    }
  }

  // Close the database connection
  $conn->close();
        ?>