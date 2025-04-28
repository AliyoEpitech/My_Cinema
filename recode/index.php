<!-- <?php 
$serveur = "127.0.0.1";
$username = "root";
$password = "aliyo1004";
$db = "cinema";

try{
    $connexion = new PDO("mysql:host=$serveur;dbname=$db", "$username", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $connexion->query('SELECT title FROM movie WHERE title LIKE "a%" LIMIT 10;');
    $resultat = $connexion->fetchAll(PDO::FETCH_ASSOC);
    echo $resultat;


} 

catch(PDOException $e) {
    echo "Erreure :" . $e ->getMessage();
}
