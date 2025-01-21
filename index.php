<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "cinema";

// try et catch permette de gerer l'erreur.

try {
    $connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $requete = $connexion->prepare("SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id INNER JOIN movie_genre ON movie.id = movie_genre.id_movie INNER JOIN genre ON movie_genre.id_genre = genre.id;");
    $requete->execute();
    $resultat = $requete->fetchall(PDO::FETCH_ASSOC);
    
    $tableau=[];
    foreach($resultat as $valuetbl) {
        array_push($tableau, $valuetbl["title"]);
    }

    echo json_encode($tableau);

    // foreach($resultat as $valuetbl) {
    //     $genre = $valuetbl["name"];
    //     $nameDistributor = $valuetbl["8"];
    //     $id = $valuetbl["id"];
    //     $distributor = $valuetbl["title"];
    //     echo "<pre>";
    //     echo "$id.$distributor => $nameDistributor => $genre";
    //     echo "<pre>";
    // }

} catch (PDOException) {
    die("Echec de la connexion");
}
