<?php
require_once "database/database-connection.php";

function getColor($classroom_id) {
    global $pdo; 
    $query = "SELECT classroom_status FROM classrooms WHERE classroom_id = :classroom_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':classroom_id', $classroom_id);
    $stmt->execute();
    $classroom_status = $stmt->fetchColumn();

    if ($classroom_status == "occupied") 
        {
            return 'class="red"';
        } 
    elseif ($classroom_status == "vacant") 
        {
        return 'class="green"';
        } 
    else 
        {
            return 'class="gray"';
        }
}
?>