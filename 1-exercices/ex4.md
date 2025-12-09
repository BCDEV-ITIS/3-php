# Exercice 4 : manipulation des fichiers

## Ressources

- [Fonction move_upload pour déplacer un fichier *uploadé*](https://www.php.net/manual/fr/function.move-uploaded-file.php)

---

## Enoncé

1. A partir de vos travaux de l'exercice 3, à chaque soumission pour une inscription, créez un nouveau fichier *JSON* contenant les informations envoyées.
Une soumission = 1 fichier crée lorsque tout est ok.
Le fichier est au format JSON (extension .JSON avec les données en JSON clé-valeur de l'utilisateur)
2. Modifiez le formulaire en y ajoutant les lignes de code ci-dessous pour permettre aux utilisateurs d'envoyer une photo et stockez les photos dans le dossier `front/images`.

- Dans la balise ouvrante  `form` du fichier `front/sign_up.php`, ajoutez l'attribut et valeur suivante ***`enctype="multipart/form-data"`***
- Entre la balise ouvrante et fermante de `form` toujours du fichier `front/sign_up.php`, ajoutez le code HTML suivant : 

```html
<div class="my-3"><label for="picture" class="form-label">Photo de profil</label><input class="form-control" type="file" id="picture" name="picture"></div>
```