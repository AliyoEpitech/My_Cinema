<?php

function genreSearch() {

include 'connection.php';

$requete = $connexion->prepare('SELECT title,genre.name FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id INNER JOIN movie_genre ON movie.id = movie_genre.id_movie INNER JOIN genre ON movie_genre.id_genre = genre.id WHERE genre.name = "action";');
$requete->execute();
$resultat = $requete->fetchall();
$tableau1=[];
foreach($resultat as $valutbl1){
    array_push($tableau1, $valutbl1['title']);
}

echo json_encode($tableau1);

}

genreSearch("");

