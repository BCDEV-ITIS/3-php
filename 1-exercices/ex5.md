# Exercice 5 : connexion et gestion des sessions et cookies

## Ressources

- [Fonction *password_verify()* pour vérifier que 2 mots de passe (un haché et l'autre non) sont identiques](https://www.php.net/manual/fr/function.password-verify.php)

---

## Enoncé

***PS : Ajoutez la méthode `POST` dans la balise form du fichier front/index.php***
1. Connectez l'utilisateur en vérifiant ses informations (email et mot de passe dans la base de données). Lorsque les informations sont correctes, lancez une session et stockez les informations de votre choix dans les cookies et/ou variables de session.
2. Depuis la page `back/dashboard.php` affichez les informations stockées dans les cookies et la session de l'utilisateur.
3. Remodifiez votre code pour rédiriger l'utilisateur suite à sa connexion avec succès vers la page `dashboard.php` en utilisant [header('Location: xxxx');](https://www.php.net/manual/en/function.header.php)
4. Empêchez un utilisateur qui possède une session d'accéder à nouveau aux pages de connexion et d'inscription.
5. Créez une nouvelle page `logout.php` dans le dossier `back`.
6. Déconnectez un utilisateur depuis l'action vers le bouton présent dans le fichier `back/dashboard.php` qui fait une requête vers le fichier `back/logout.php` via la balise `<a href="back/logout">`.
7. Rédirigez l'utilisateur vers la page de connexion, une fois la session en cours est détruite.