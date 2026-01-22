<?php

require_once __DIR__.'/config/parameters.php';
/**
 * Se connecter à la base de données à l'aide de la classe PDO
 * Inserer un ou plusieurs utilisateur à l'aide de PDO et de la requête INSERT
 * @see https://blog.crea-troyes.fr/3368/pdo-en-php-un-tutoriel-complet-avec-des-exemples-concrets/
 */

$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8';

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
}
$sql = "INSERT INTO user (firstname, lastname, email, birthday, password)
VALUES (:firstname, :lastname, :email, :birthday, :password)";
// Préparation de la requête cela évite d'avoir des injections SQL
$stmt = $pdo->prepare($sql);
// Mapping (association) entre les clés et les valeurs attendues
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':birthday', $birthday);

if ($stmt->execute()) {
    echo 'Insertion réussie !';
} else {
    echo "Echec de l'insertion.";
}


