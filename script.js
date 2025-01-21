document.addEventListener("DOMContentLoaded", () => {

    fetch("http://localhost:3000/index.php")
    .then((reponse) => {
        return reponse.json();
    })
    .then((json) => {
        console.log(json);
        var requete = json;
    })

    var resultat = document.getElementById("nbr");
    var input = document.querySelectorAll("input");
    console.log(input);
    

});