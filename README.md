# FineTracker

FineTracker est une application web développée avec Laravel qui permet aux utilisateurs de suivre leurs dépenses et leurs revenus, de catégoriser leurs dépenses, et de visualiser un tableau de bord personnalisé avec un résumé de leurs transactions.

## Introduction

La gestion des finances personnelles est essentielle pour contrôler ses dépenses, planifier ses économies et gérer ses revenus efficacement. FineTracker aide les utilisateurs à mieux suivre leurs finances en offrant une plateforme simple et intuitive pour enregistrer et visualiser leurs transactions financières.

## Fonctionnalités Principales

- **Suivi des Dépenses et Revenus** : Enregistrez et suivez toutes vos transactions financières.
- **Catégorisation des Dépenses** : Classez vos dépenses par catégories pour une meilleure organisation.
- **Tableau de Bord Personnalisé** : Visualisez un résumé de vos transactions avec des cartes pour les dépenses totales, les revenus totaux et le solde.
- **Authentification des Utilisateurs** : Inscription, connexion et déconnexion sécurisées.
- **Opérations CRUD** : Gérez les catégories, les revenus et les dépenses avec des opérations de création, lecture, mise à jour et suppression.

## Installation

### Prérequis

- PHP >= 7.3
- Composer
- MySQL

### Étapes d'Installation

1. Clonez le dépôt GitHub :
    ```sh
    git clone https://github.com/Wilfried0711/FineTracker.git
    cd FineTracker
    ```

2. Installez les dépendances :
    ```sh
    composer install
    ```

3. Configurez les variables d'environnement :
    - Dupliquez le fichier `.env.example` et renommez-le en `.env`.
    - Configurez les informations de votre base de données dans le fichier `.env`.

4. Générez la clé d'application :
    ```sh
    php artisan key:generate
    ```

5. Exécutez les migrations :
    ```sh
    php artisan migrate
    ```

6. Démarrez le serveur de développement :
    ```sh
    php artisan serve
    ```

### Instructions pour Cloner et Exécuter l'Application en Local

1. Assurez-vous d'avoir installé tous les prérequis mentionnés ci-dessus.
2. Suivez les étapes d'installation ci-dessus pour cloner le dépôt, installer les dépendances, configurer les variables d'environnement, générer la clé d'application et exécuter les migrations.
3. Lancez le serveur de développement avec la commande `php artisan serve`.
4. Accédez à l'application via `http://localhost:8000` dans votre navigateur web.

## Structure des Données

### Modèles et Migrations

- **User** : Utilisateurs (système d'authentification Laravel).
- **Category** : Catégories de dépenses.
    - `id`
    - `name`
    - `user_id`
    - `created_at`
    - `updated_at`
- **Revenue** : Revenus.
    - `id`
    - `user_id`
    - `amount`
    - `description`
    - `is_recurrent` (booléen, par défaut false)
    - `revenue_date`
    - `created_at`
    - `updated_at`
- **Expense** : Dépenses.
    - `id`
    - `category_id`
    - `user_id`
    - `amount`
    - `description`
    - `is_recurrent` (booléen, par défaut false)
    - `expense_date`
    - `created_at`
    - `updated_at`

### Associations des Données

- Chaque `Category`, `Revenue` et `Expense` est associé à un `User` via le champ `user_id`.
- Les relations sont configurées dans les modèles Laravel pour gérer ces associations (`belongsTo`, `hasMany`).

## Tableau de Bord

- **Montant Total des Dépenses** : Affiche le total des dépenses.
- **Montant Total des Revenus** : Affiche le total des revenus.
- **Solde** : Affiche le solde actuel (revenus - dépenses).
- **Dernières Dépenses** : Tableau des 5 dernières dépenses.

## Sécurité

- Accès aux fonctionnalités de gestion des catégories, revenus et dépenses restreint aux utilisateurs connectés.
- Utilisation du système d'authentification Laravel.
