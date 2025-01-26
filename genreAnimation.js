
option[3].addEventListener("click", (e) => {

    fetch("./DossierPHP/genreAnimation.php", {method:"get",})
    .then((reponse)=> {
        return reponse.json();
    })
    .then((Animation) => {
        var resultat1 = document.getElementById("resultat1");
        resultat1.innerText = Animation;
    })
})