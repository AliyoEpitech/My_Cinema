<?php 

// try et catch permette de gerer l'erreur.
function movieSearch($search) {

    include 'connection.php';

    $requete = $connexion->query("SELECT title FROM movie WHERE title LIKE '%$search%';");
    //$requete = $connexion->prepare("SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id INNER JOIN movie_genre ON movie.id = movie_genre.id_movie INNER JOIN genre ON movie_genre.id_genre = genre.id;");
    $requete->execute();
    $resultat = $requete->fetchall();
    $tableau=[];
    foreach($resultat as $valuetbl) {
        array_push($tableau, $valuetbl["title"]);
    }
    echo json_encode($tableau);

}

movieSearch($_GET["search"]);


