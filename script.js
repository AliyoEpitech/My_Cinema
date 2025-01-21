document.addEventListener("DOMContentLoaded", () => {
    // function reqListener() {
    //     console.log(this.responseText);
    // }

    // let req = new XMLHttpRequest();
    // req.onload = reqListener;
    // req.open("get", "cinema.sql", true);
    // req.send();
    //FETCH


    fetch("http://localhost:3000/index.php", {
    })
    .then((reponse) => {
        return reponse.json();
    })
    .then((json) => {
        console.log(json);
    })
});