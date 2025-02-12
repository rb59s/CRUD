<?php
include 'database.php';

try {
    $query = "SELECT * FROM tache";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des tâches : " . $e->getMessage());
}
?>