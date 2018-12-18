/* Kör koden när webbsidan laddats klart */
window.onload = start;

function start() {

    /* Elementen vi jobbar med */
    const elementTal1 = parseInt(document.querySelector("#tal1").value);
    const elementTal2 = parseInt(document.querySelector("#tal2").value);
    const elementValj = document.querySelector("#valj").value;
    const elementResultat = document.querySelector("#resultat");

    if (elementValj == "plus") {
        elementResultat = a + b;
    } else if (elementValj == "minus") {
        elementResultat = a - b;
    } else if (elementValj == "div") {
        elementResultat = a / b;
    } else if (elementValj == "ggr") {
        elementResultat = a * b;
    }
    document.querySelector("#resultat").innerHTML = elementResultat;
}