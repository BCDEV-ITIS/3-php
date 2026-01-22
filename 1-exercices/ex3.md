# Exercice 3 : gestion d'un formulaire d'inscription et des erreurs

---

## Modalités

- [x] Utilisez la POO

---

## Ressources

- [Pages HTML/CSS/JS/PHP à récupérer ici](./ressources/ex3-4.zip)

---

## Enoncé

1. Récupérez ce [fichier zip](./ressources/ex3-4.zip)
2. Lisez le `README.md` une fois que vous avez décompressé le fichier.

3. Effectuez le traitement ci-après dans le fichier ***/back/countries.php***.
Créez un script PHP permettant de récupérer tous les pays contenu dans le fichier ***/back/data/countries_and_cities.json*** et les retournez au format JSON suivant

```json
{
  "success": 200,
  "data": {
    "countries": [
      "Afghanistan",
      "Aland Islands"
      "Albania",
      "Algeria"
      "..."
    ]
  }
}
```

4. Faites de même pour récupérer toutes les villes à partir d'un pays donnée en entré (paramètre de votre fonction)

```json
{
  "success": 200,
  "data": {
    "country": "Afghanistan",
    "cities": [
      "‘Alāqahdārī Dīshū",
      "Aībak",
      "Andkhoy",
      "Āqchah",
      "Ārt Khwājah",
      "..."
    ]
  }
}
```

## Bonus

5. Gérez les cas d'erreurs en retournant toujours un JSON avec un status HTTP et les message adéquat selon la nature de l'erreur
