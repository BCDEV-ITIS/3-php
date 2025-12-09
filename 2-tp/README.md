# TP : mise en place d'une *API* complète

## Énoncé

1. Mettez-vous en binôme et créez un dépôt GitHub
2. Créez une ***API REST*** pour la **Ligue des champions 2025-2026** pour répondre aux besoins ci-dessous, vous pouvez vous appuyer sur les informations du site [***EuroSport***](https://www.eurosport.fr/football/ligue-des-champions/classements.shtml) sur la compétition. Votre application écoute sur le port ***8010***
**PS : il n'est pas demandé de restituer tous les clubs et matchs, un échantillon suffira amplement** 

| Méthode HTTP | Endpoint   | Ressources             |
| -------- | -------------- | ---------------------- |
| `GET`    | `/teams`       | Liste des équipes (clubs) |
| `GET`    | `/teams/:id`   | Un seul club |
| `GET`    | `/games` | Liste de tous les matchs |
| `POST`   | `/games` | Ajouter un match       |
| `PUT`    | `/games/:id` | Mettre à jour un match |

## La structure des données de votre API

```json
{
  "teams": [
    { "id": 1, "name": "Real Madrid", "country": "Spain" },
    { "id": 2, "name": "Juventus Turin", "country": "Italy" },
    { "id": 3, "name": "Paris Saint-Germain", "country": "France" }
    { "id": 4, "name": "Bayern Leverkusen", "country": "Germany" },
  ],
  "games": [
    { "id": 1, "home": 1, "away": 2, "score": "1-0", "date": "2025-10-22" },
    { "id": 2, "home": 4, "away": 3, "score": "2-7", "date": "2025-10-21" }
  ]
}
```

Ici les propriétés *home* et *away* stockent les identifiants des équipes par exemple pour le match avec l'*id* 1, c'est le *Real* qui a joué à domicile avec une victoire 1-0 face à la *Juventus* (équipe à l'extérieur).

---

## Bonus

Créez des nouvelles routes pour récupérer :
- Les clubs d'un même pays
- Tous les matchs joués par un club
- Le classement général
- Le nombre de points d'une équipe
- Le score d'un match
- Les matchs qui se déroulent à partir d'une date
- Liste des joueurs
- Les matchs à domicile d'une équipe
- etc. selon les limites de votre imagination