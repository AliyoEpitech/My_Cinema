option[5].addEventListener("click", (e) => {

    fetch("./DossierPHP/genreComedy.php", {method:"get",})
    .then((reponse)=> {
        return reponse.json();
    })
    .then((Comedy) => {
        var resultat1 = document.getElementById("resultat1");
        resultat1.innerText = Comedy;
    })
})