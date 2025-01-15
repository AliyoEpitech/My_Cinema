<?php 
$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "cinema";

// try et catch permette de gerer l'erreur.
try {
    $connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $requete = $connexion->prepare("SELECT * FROM genre;");
    $requete->execute();
    $resultat = $requete->fetchall();
    foreach($resultat as $valuetbl) {
        $name = $valuetbl["name"];
        $id = $valuetbl["id"];
        echo "<pre>";
        echo "$id.$name";
        echo "<pre>";
    }
} catch (PDOException) {
    die("Echec de la connexion");
}
