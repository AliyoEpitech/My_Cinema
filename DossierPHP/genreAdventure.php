<?php

function genreAdventure() {

include 'connection.php';

$requete = $connexion->prepare('SELECT title,genre.name FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id INNER JOIN movie_genre ON movie.id = movie_genre.id_movie INNER JOIN genre ON movie_genre.id_genre = genre.id WHERE genre.name = "adventure";');
$requete->execute();
$resultat = $requete->fetchall();

$tableau2=[];
foreach($resultat as $valutbl2){
    array_push($tableau2, $valutbl2['title']);
}

echo json_encode($tableau2);

}

genreAdventure(""); 