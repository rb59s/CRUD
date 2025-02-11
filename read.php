<?php
include 'database.php'; 


$query = "SELECT * FROM tache";
$stmt = $pdo->query($query);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>