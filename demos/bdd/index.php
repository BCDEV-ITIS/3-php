<?php
require_once __DIR__.'/config/parameters.php';
/**
 * Se connecter à la base de données à l'aide de la classe PDO
 * Inserer un ou plusieurs utilisateur à l'aide de PDO et de la requête INSERT
 * @see https://blog.crea-troyes.fr/3368/pdo-en-php-un-tutoriel-complet-avec-des-exemples-concrets/
 */

var_dump($_POST);
// Uniquement lorsqu'il y a une soumission du formulaire
if(!empty($_POST)) {
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
    // Récupération des infos envoyées par le formulaire
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Mapping (association) entre les clés et les valeurs attendues
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':birthday', $birthday);
    // Exécution de la requête au niveau de la base de données
    if ($stmt->execute()) {
        echo 'Insertion réussie !';
    } else {
        echo "Echec de l'insertion.";
    }
}

/**
 * TODO
 * 1. Récuperer et afficher les infos des utilisateurs ici
 * 2. Sécuriser le mot de passe en le hashant avec la fonction password_hash()
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire insertion utilisateur</title>
</head>
<body>
    <form method="post">
        <input type="text" name="lastname" id="lastname" placeholder="Prénom">
        <input type="text" name="firstname" id="firstname" placeholder="Nom">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" placeholder="password">
        <input type="date" name="birthday">
        <input type="submit" value="Envoyer">
    </form>
    <section>
        <h2>Les utilisateurs enregistrés</h2>
    </section>
</body>
</html>


