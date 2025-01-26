
option[2].addEventListener("click", (e) => {

    fetch("./DossierPHP/genreAdventure.php", {method:"get",})
    .then((reponse)=> {
        return reponse.json();
    })
    .then((Adventure) => {
    console.log(Adventure);
        
        var resultat1 = document.getElementById("resultat1");
        resultat1.innerText = Adventure;

    })
}) 