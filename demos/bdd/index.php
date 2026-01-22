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


