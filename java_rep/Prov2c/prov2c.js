window.onload = start;

function start() {

    /* Läs in alla rutor */
    const eVara1 = document.querySelector("#vara1");
    const eVara2 = document.querySelector("#vara2");
    const eFrakt = document.querySelector("#frakt");
    const eRabbat = document.querySelector("#rabattkod");
    const eTotal = document.querySelector("#total");
    const eKnapp = document.querySelector("button");

    /* Kör på funktionen när du klickar på knappen */
    eKnapp.addEventListener("click", total);

    function total() {

        /* Räkna ut totalvärdet utan rabbat */
        let vara1 = Number(eVara1.value) * 39;
        let vara2 = Number(eVara2.value) * 102;
        let frakt = Number(eFrakt.value);
        let rabbat = Number(eRabbat.value);
        let total = vara1 + vara2 + frakt;

        /* Om rabbat koden är "5599", ta "total" minus 29 */
        if (rabbat == "5599") {
            total = total - 29;
        }
        /* Skriv ut totala värdet i rutan */
        eTotal.value = total;
    }
}