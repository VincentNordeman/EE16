/* Start */
window.onload = init;

function init() {

    /* Lista på alla element */

    const eGodkand = document.querySelector("#godkand");
    const eGogiltig = document.querySelector("#giltig");
    const eBetalt = document.querySelector("#betalt");
    const eMomssats = document.querySelector("#momssats");
    const eBelopp = document.querySelector("#belopp");
    const eTotal = document.querySelector("#total");
    const eKnapp = document.querySelector("button");

    eKnapp.addEventListener("click", registreraKvitto);

    function registreraKvitto() {
        let godkand = eGodkand.checked;
        let giltig = eGogiltig.checked;
        let betalt = eBetalt.checked;
        let momssats = eMomssats.value;
        let belopp = Number(eBelopp.value);
        console.log(godkand);
        console.log(giltig);
        console.log(betalt);
        console.log(momssats);
        console.log(belopp);

        /* Räkna ut belopp med moms */
        let total = belopp * (1 + momssats / 100);

        /* Om man allt är ifyllt eller inte.  */
        if (godkand == true && giltig == true && betalt == true){
        /* Skriv ut totalen på webbsidan */
            eTotal.value = total;
        } else {
            alert("Kvittot måste vara godkänt, giltigt och betalt");
        }
    }
}