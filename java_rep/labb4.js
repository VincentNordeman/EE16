window.onload = start;
var slumptal;
const elementInput = document.querySelector("input");
const elementP = document.querySelector("p");
/* Början
1. Skapar ett slumptal
*/

function start() {
    slumptal = Math.ceil(Math.random() * 100);
    console.log(slumptal);
}

/* Knappen läser av
1. Läs av gissningen
2. Kolla om det är rätt */

function gissa() {
    var gissningen = elementInput.value;
    console.log(gissningen);

    if (slumptal == gissningen) {
        elementP.textContent = "Hurraa";
    }
    if (slumptal < gissningen) {
        elementP.textContent = "För högt";
    }
    if (slumptal > gissningen) {
        elementP.textContent = "För lågt";
    }
}