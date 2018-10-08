/* Kör koden när webbsidan har laddats klart */
window.onload = init;

var tal1 = Math.ceil(Math.random() * 5);
var tal2 = Math.floor(Math.random() * 10);

function init() {

    /* Skriv ut frågan */
    /* Ta tag i elementet */
    var elefraga = document.querySelector("#fraga");
   
    /* Skriv ut */
    elefraga.textContent = "Vad blir " + tal1 + "+" + tal2 + "?";
    
    /* Aktivera knappen */
    /* Hämta knappen */
    var eleknapp = document.querySelector("#knapp");
    /* Lyssna på knappen */
    eleknapp.addEventListener("click", skydd);
}

function skydd() {
    /* Testa i console */
    console.log("skydd anropat");
    
    /* Läs in tal1 och tal2 (summa) */
    var eleSumma = document.querySelector("#summan");
    var summa = eleSumma.value; 
    console.log(summa);
    
    /* Jämför */
    if (summa == (tal1 + tal2)) {
        console.log("Rätt");
    } else {
        console.log("Fel");
        
    }
}