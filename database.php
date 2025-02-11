<?php 


$user = 'user';
$password = 'password';

try{
    $pdo = new PDO ('mysql:host=db; dbname=todo_list', $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données !";

} 
catch(PDOException $e) {
    print "Erreur :" . $e->getMessage() . "</br>";
    die;
}


?>