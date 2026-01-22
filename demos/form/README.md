# Demo protection formulaire

## Plusieurs niveaux

1. Niveau 1 : sécuriser en utilisant les attributs HTML
- ***pattern***
- ***max***
- ***min***
- ***maxLength***
- ***minLength***
- Etc
Le navigateur prend le contrôle et vérifie avant la soumission du formulaire que les champs respectent les attributs précédents s'ils existent. Très peu fiable, car depuis la devTools, on peut modifier ou supprimer facilement ses attributs
2. Niveau 2 : sécuriser via le JS avec le ***DOM*** et les ***REGEX***. Plus fiable mais un utilisateur averti peut désactiver JS sur son navigateur et toutes les protections tombent à l'eau
3. Niveau 3 : avec PHP avec les fonctions ***REGEX*** dédiées et les ***fonctions de validation***. Fiable à renforcer avec les requêtes préparées lorsqu'il s'agit d'effectuer des opérations dans une base de données
4. Niveau 4 : avec la base de données en utilisant des ***triggers*** avant les opérations d'insertion, modification ou suppression. Également fiable mais très coûteux en performance surtout s'il y a du trafic et des données très volatiles (changement fréquent)

---

## Lancement du projet

1. Ouvrez le index.html et lancez Live Server
2. Lancez le serveur backend PHP
```bash
cd api
php -S localhost:8080 index.php
```