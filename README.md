Projet Laravel et Angular

Ce dépôt contient deux projets : un projet backend avec Laravel et un projet frontend avec Angular. Voici les étapes pour exécuter chaque projet.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [Node.js](https://nodejs.org/) (version recommandée : 18.19 ou supérieure)
- [npm](https://www.npmjs.com/) (inclut avec Node.js)
- [Composer](https://getcomposer.org/) (pour gérer les dépendances PHP)
- [PHP](https://www.php.net/) (version 8.3 ou supérieure)
- [MySQL](https://www.mysql.com/) (ou toute autre base de données prise en charge par Laravel)
- décommenter quelques extension sur le fichier de cinfiguration Php.ini:
  openssl,mysqli,fileinfo

## Cloner le projet

Commencez par cloner ce dépôt sur votre machine locale.
git clone https://github.com/username/nom-du-depot.git
cd nom-du-depot

## Installation du projet Laravel (Backend)

###. Installer les dépendances
Allez dans le répertoire Laravel et installez les dépendances PHP avec Composer :

cd backend-laravel
composer install

###. Configurez la connexion à la base de données dans le fichier .env :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=utilisateur
DB_PASSWORD=mot_de_passe

### Exécuter les migrations
Créez les tables de la base de données en exécutant les migrations :
php artisan migrate

### Lancer le serveur Laravel
php artisan serve

Le projet backend est maintenant accessible à l'adresse http://127.0.0.1:8000.

## Installation du projet Angular (Frontend)
### Installer les dépendances
Allez dans le répertoire Angular et installez les dépendances npm :
cd ../frontend-angular
npm install

### Lancer le serveur Angular
ng serve
Par défaut, le projet frontend sera disponible à l'adresse http://localhost:4200.
