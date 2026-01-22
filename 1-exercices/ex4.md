# Exercice 4 : gestion d'un formulaire d'inscription

## Modalités

- [x] Continuez à coder en POO

---

## Ressources et aides

- [Reprenez l'exercice 3](./ex3.md)

### Aide

#### Hashage des mots de passe

- [Utilisez la fonction password_hash()](https://www.php.net/manual/en/function.password-hash.php)

#### Sans la validation avec les Regex

- [Documentation d'aide à la vérification des données sans les expressions régulières](https://www.php.net/manual/fr/function.filter-var.php)

- Utilisez pour les vérifications la fonctions [empty()](https://www.php.net/manual/fr/function.empty) ou [isset()](https://www.php.net/manual/fr/function.isset.php) ou [filter_input()](https://www.php.net/manual/fr/function.filter-input.php)
- [Fonction is_numeric()](https://www.php.net/manual/fr/function.is-numeric.php)

#### Avec les expressions régulières

- [Apprendre les expressions régulières](https://regexlearn.com/fr/learn/regex101)
- [Fonction preg_match combinée aux expressions régulières pour vérifier les données](https://www.php.net/manual/fr/function.preg-match)

##### Quelques expressions régulières pour les champs du formulaire

- email : `"/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i"`
- Nom et prénom : `"/^[a-z]+(?!_)(\s|-)?[a-z]+\$/i"`
- Age `"/(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).([19]{2})?([1-9]{2})/"`
- Ville et pays : `"/^[a-z]+(?!_)(\s|-)?[a-z0-9|\s]+\$/i"`
- Mot de passe : `"/^(?!abcdef|qwerty|azerty|123456)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[&\$+\-*\/#~€%^!-_]).{15,36}\$/"`

---

## Enoncé

1. Créez une base de données directement via PHPMyAdmin
2. Importez les données de la base de données depuis le fichier */back/data/database.sql* directement en copiant collant le contenu dans l'onglet SQL de PHPMyAdmin
3. Récupérez et vérifiez les données soumises par le formulaire d'inscription. Dans le cas où tout serait renseigné et au bon format, vous pouvez enregistrer les informations dans la table user et retourner une réponse au format JSON de type :
- En cas de succès 
```json
{
  "message": "OK",
  "status": 201,
  "id": 1 # entier correspond au dernier ID auto-incrementé par la base de données sur la table user
}
```
- En cas d'erreur sur au moins l'un des champs
```json
{
  "message": "KO [error message here]",
  "status": 400
}
```

4. Récupérez les pays et les villes depuis la base de données

## Bonus

5. Réorganisez tout le projet avec une meilleure architecture.