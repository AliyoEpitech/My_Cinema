option[4].addEventListener("click", (e) => {

    fetch("./DossierPHP/genreBiography.php", {method:"get",})
    .then((reponse)=> {
        return reponse.json();
    })
    .then((Buigraphy) => {
        var resultat1 = document.getElementById("resultat1");
        resultat1.innerText = Buigraphy;
    })
})