<?php
// Définition des informations de connexion à la base de données
define('HOST', '127.0.0.1');
define('LOGIN', 'root');
define('PASSWORD', 'c8fwdxwh');
define('DBNAME', 'ecommerce');

// Ajout des fichiers nécessaire au bon fonctionnement du site
include_once 'db/database.php';
include_once 'model/users.php';
include_once 'model/model.php';
include_once 'model/delivery.php';
include_once 'lang/FR_FR.php';