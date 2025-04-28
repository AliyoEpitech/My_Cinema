<?php

require_once 'envloader.php'; // Charge la fonction pour lire .env

loadEnv(__DIR__ . '/.env'); // Charge les variables dans $_ENV

$server = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$table = $_ENV['DB_NAME'];

$connexion = new PDO("mysql:host=$server;dbname=$table", $user, $password);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
