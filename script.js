document.addEventListener("DOMContentLoaded", () => {

    fetch("http://localhost:3000/index.php", { method: "GET",})
    .then((reponse) => {
        return reponse.json();
    })
    .then((json) => {
        
        var resultat = document.getElementById("nbr");
        console.log(resultat);
        
        var input = document.querySelectorAll("input");
        console.log(input[0]);
        var search = input[0];
        
        console.log(json);
        var movie = json;
    
        document.addEventListener("click", (e) => {
            // console.log(e.target);
            if(e.target == input[1]){
                console.log(search["value"]);
            }
        })
    })
});
