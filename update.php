<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id1'])) {
    $id = $_POST['id1'];  // Récupérer l'ID de la tâche

    // Requête pour mettre à jour la colonne 'faite' de la tâche correspondante
    $query = "UPDATE tache SET faite = 1 WHERE id = :id"; // Utiliser 'id' pour la condition
    $stmt = $pdo->prepare($query);  // Préparer la requête

    // Lier le paramètre :id à la variable $id
    $stmt->bindParam(':id', $id);

    // Exécuter la requête
    $stmt->execute();

    // Rediriger vers la page d'index après la mise à jour
    header("Location: index.php");
    exit();}
    ?>