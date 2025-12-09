# Exercice 3 : gestion d'un formulaire d'inscription

---

## Ressources

- [Pages HTML/CSS/JS/PHP à récupérer ici](./ressources/ex3.zip)
- [Documentation d'aide à la vérification des données sans les expressions régulières](https://www.php.net/manual/fr/function.filter-var.php)
- [Apprendre les expressions régulières](https://regexlearn.com/fr/learn/regex101)
- [Fonction preg_match combinée aux expressions régulières pour vérifier les données](https://www.php.net/manual/fr/function.preg-match)
- [Fonction is_numeric()](https://www.php.net/manual/fr/function.is-numeric.php)

## Aide sans la validation avec les Regex

- Utilisez pour les vérifications la fonctions [empty()](https://www.php.net/manual/fr/function.empty) ou [isset()](https://www.php.net/manual/fr/function.isset.php) ou [filter_input](https://www.php.net/manual/fr/function.filter-input.php)

## Aide avec validation via les REGEX (en bonus et en option)

Voici des expressions régulières pour les champs du formulaire :
- email : `"/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i"`
- Nom et prénom :  `"/^[a-z]+(?!_)(\s|-)?[a-z]+\$/i"`
- Age `"/^(1[0-2][0-9]|1[4-9]|[2-9][0-9]|130)\$/"`
- Ville et pays : `"/^[a-z]+(?!_)(\s|-)?[a-z0-9|\s]+\$/i"`
- Mot de passe : `"/^(?!abcdef|qwerty|azerty|123456)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[&\$+\-*\/#~€%^!-_]).{15,36}\$/"`

---

## Enoncé

1. Récupérez ce [fichier zip](./ressources/ex3.zip)
2. Lisez le `README.md` une fois que vous avez décompressé le fichier.
3. Récupérez les pays
4. Récupérez les villes
3. Récupérez et vérifiez les données soumises par le formulaire d'inscription.
Dans le cas où tout serait renseigné et au bon format, vous pouvez retourner une réponse au format JSON du type `{"message" => "OK"}`.
Dans le cas contaire `{"message" => "KO"}`