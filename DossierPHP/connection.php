<?php

require_once __DIR__ . '/vendor/autoload.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$server = $_ENV['DB_SERVER'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$table = $_ENV['DB_NAME'];

$connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
