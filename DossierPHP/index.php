<?php 
// try et catch permette de gerer l'erreur.

function movieSearch($search) {
    
    $server = "localhost";
    $user = "root";
    $password = "aliyo1004";
    $table = "cinema";

    $connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $requete = $connexion->query("SELECT title FROM movie WHERE title LIKE '%$search%';");
    //$requete = $connexion->prepare("SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id INNER JOIN movie_genre ON movie.id = movie_genre.id_movie INNER JOIN genre ON movie_genre.id_genre = genre.id;");
    $requete->execute();
    $resultat = $requete->fetchall(PDO::FETCH_ASSOC);
    $tableau=[];
    foreach($resultat as $valuetbl) {
        array_push($tableau, $valuetbl["title"]);
    }
    // echo $_GET["search"];
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
}

movieSearch($_GET["search"]);