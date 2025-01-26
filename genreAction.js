option[1].addEventListener("click", (e) => {

    fetch("./DossierPHP/genreAction.php", {method:"get",})
    .then((reponse)=> {
        return reponse.json();
    })
    .then((action) => {
        var resultat1 = document.getElementById("resultat1");
        resultat1.innerText = action;
    })
}) 