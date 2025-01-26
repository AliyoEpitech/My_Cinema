    var option = document.querySelectorAll("option");
    console.log(option);

    fetch("./DossierPHP/index.php?search=", { method: "get",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json) => {

        var resultat = document.getElementById("nbr");
        console.log(resultat);
        
        var input = document.querySelectorAll("input");
        console.log(input[0]);
        var search = input[0];
        
        var movie = json;
        
        document.addEventListener("click", (e) =>{
            console.log(e.target);
        })
        
        document.getElementById("Rechercher").onclick = () => {

                console.log(search["value"]);
                fetch("./DossierPHP/index.php?search="+ search["value"], { method: "get",})
                .then((reponse) => {
                    return reponse.json();
                })
                .then((json) => {
                    resultat.innerText = json;         
                })
        }
    })
