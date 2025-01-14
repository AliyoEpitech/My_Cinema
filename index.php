<?php 
 
$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "cinema";
 
try {
    $connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $connexion->prepare("SELECT * FROM genre;");
    $requete->execute();
    $resultat = $requete->fetchall();
    foreach()
    echo"<pre>";
      print_r($resultat);
    echo "<pre>";
} catch (PDOException $e) {
    die("Echec de la connexion");
}

// echo "Connexion à la base de données réussie";
// $requete = $connexion->query("SELECT* FROM job");
// echo $requete;