# Gestion des étudiants dans une école

Bienvenue sur mon site de gestion des étudiants de notre école. Ce projet permet de gérer les informations des étudiants inscrits à travers plusieurs pages et fonctionnalités.

## Fichiers Créés :

### Accueil.html

La page d'accueil de mon site contient :
- Titre : Gestion des étudiants dans une école
- Deux boutons :
  1. Formulaire d'ajout d'un étudiant
  2. Affichage de la liste des étudiants inscrits

### AjouterEtudiant.html

Cette page permet d'ajouter un nouvel étudiant. Elle comprend :
- Titre : Formulaire d'inscription d'un étudiant
- Bouton de retour à la page Accueil.html
- Champs à remplir : Nom, Prénom, Date de Naissance, Adresse, Filière, Image
- Deux boutons : Ajouter et Annuler

### ModifierEtudiant.php

Cette page permet de modifier les informations d'un étudiant existant. Elle inclut :
- Titre : Formulaire de modification d'un étudiant
- Bouton de retour à la page Affichage.php
- Champs à modifier : Nom, Prénom, Date de Naissance, Adresse, Filière, Image
- Deux boutons : Modifier et Annuler

### Affichage.php

Cette page affiche la liste des étudiants inscrits sous forme de tableau. Elle propose :
- Titre : Liste des étudiants inscrits
- Deux icônes par étudiant :
  1. Supprimer
  2. Modifier (redirige vers ModifierEtudiant.php)

### traitement.php

Ce fichier PHP contient les fonctionnalités suivantes pour le traitement des données :
- Vérification de la connexion
- Code pour ajouter un étudiant (utilisé dans AjouterEtudiant.html)
- Code pour modifier les informations d'un étudiant (utilisé dans ModifierEtudiant.php)
- Code pour supprimer une ligne dans l'affichage des données (utilisé dans Affichage.php)
- Traitement des images

### Style.css

Fichier de feuilles de style CSS contenant les styles pour chaque balise utilisée dans les pages HTML mentionnées (div, h1, body, etc.).

---

Ces fichiers composent mon projet de gestion des étudiants. N'hésitez pas à explorer chaque fichier pour mieux comprendre son rôle dans mon application web.

## Déploiement sur GitHub Pages

Le site est déployé sur GitHub Pages et est accessible à l'adresse suivante :

[https://github.com/ARTISTEwiame/GestionEcole.git]

## Instructions pour Cloner le Projet

Pour cloner ce projet sur votre machine locale, utilisez la commande suivante :

```bash
git clone github.com/ARTISTEwiame/GestionEcole.git
