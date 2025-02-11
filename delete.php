<?php
include 'database.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

  
    $query = "DELETE FROM tache WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    
    header("Location: index.php");
    exit();
}
?>