<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contenu'])) {
    $contenu = $_POST['contenu'];

   
    $query = "INSERT INTO tache (contenu, faite) VALUES (:contenu, 0)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':contenu', $contenu);
    $stmt->execute();

    
    header("Location: index.php");
    exit();
}
?>