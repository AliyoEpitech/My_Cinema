document.addEventListener("DOMContentLoaded", () => {

    var resultat = document.getElementById("nbr");
    console.log(resultat);
    

    fetch("http://localhost:3000/index.php", {
    })
    .then((reponse) => {
        return reponse.json();
    })
    .then((json) => {
        console.log(json);
        // resultat.innerText = json;
    })

});