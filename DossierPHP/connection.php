<?php

$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "cinema";

$connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>