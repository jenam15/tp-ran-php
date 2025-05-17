# TP Estimation de Véhicule (PHP procédural + MVC + API)

## Objectifs

Ce projet pédagogique a pour but de :

- Réviser les bases du PHP procédural (variables, boucles, fonctions, sessions)
- Construire une architecture MVC
- Créer une API REST JSON

## Structure du projet

```
public/
  index.php
  procedural/
    exo-1.php
    form.php
Controllers/
  VehiculeController.php
Models/
  Vehicule.php
Services/
  EstimateurService.php
Views/
  estimation_form.php
  estimation_result.php
routes.php
```

## Lancer le projet

Dans le dossier `public`, démarrer un serveur PHP :

```bash
php -S localhost:8000
```

## Test de l’API avec Postman

1. Méthode : `POST`
2. URL : `http://localhost:8000/api/estimation`
3. Headers :
   - `Content-Type: application/json`
4. Body :

```json
{
  "km": 60000,
  "annee": 2018
}
```

## Livrables attendus

- Une estimation en MVC
- Une API JSON fonctionnelle
- Des fichiers `exo-1.php` et `form.php` valides
