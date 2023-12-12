<?php

require '../database/database-connection.php';
?>

<?php
// Retrieve user data from the database
$query = "SELECT * FROM user";
$result = $pdo->query($query);

// Display user data using a foreach loop
if ($result && $result->rowCount() > 0) {
    foreach ($result as $row) {
        echo ' <div class="teacherName">' . $row['username'] . '</div>';
        echo '<div class="teacherInfo" id="user' . $row['user_id'] . '">' . $row['email'] . '</div>';
    }
} else {
    echo '<p>No users found</p>';
}

// Close the database connection
$pdo = null;
?>

<script>
 const teacherName = document.querySelectorAll('.teacherName');

 teacherName.forEach((container, index) => {

   const user = document.querySelector(`#user${index + 1}`);
   container.addEventListener('click', () => {
     user.classList.toggle('teacherInfoNewClass');
   });
 });
</script>

<style>
 *{
  font-size: 100px;
 }
 .teacherInfo{
  display: none;
 }
 .teacherInfoNewClass{
  display: block;
 }
</style>

