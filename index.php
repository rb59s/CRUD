<?php
include 'database.php'; // Connexion à la base de données
include 'read.php'; // Récupérer les tâches de la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="text-center">Todo List</h2>

    <!-- Formulaire pour ajouter une tâche -->
    <form action="create.php" method="POST" class="d-flex gap-2">
        <input type="text" name="contenu" class="form-control" placeholder="Ajouter une tâche" required>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


    <ul id="todo-list" class="list-group mt-3">
    <?php foreach ($tasks as $task): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span><?php echo htmlspecialchars($task['contenu']); ?></span>
            
         
            <form action="delete.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                <button type="submit" class="btn btn-danger btn-sm">✖ Supprimer</button>
            </form>

            <form action="update.php" method="POST" style="display:inline;">
                <input type="hidden" name="id1" value="<?php echo $task['id']; ?>"> 
                <button type="submit" class="btn btn-success btn-sm">Valider</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>