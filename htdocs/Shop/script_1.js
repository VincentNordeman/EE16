/* När webbsidan laddat klart kör "start" */
window.onload = start;

function start() {
    const elementTable = document.querySelector("table");
    console.log("Jag har hittat elementet", elementTable);

    const elementPlus = document.querySelector("#plus");
    console.log(elementPlus);

    const elementMinus = document.querySelector("#minus");
    console.log(elementMinus);

    const elementKop = document.querySelector("#kop");
    console.log(elementKop);

    const elementAntal = document.querySelector("#antal");
    console.log(elementAntal);

    const elementSumma = document.querySelector("#summa");
    console.log(elementSumma);

    const elementPris = document.querySelector("#pris");
    console.log(elementPris);

    const elementKorgen = document.querySelector("#korgen");
    console.log(elementKorgen);


    /* Lyssna på händelser */
    elementPlus.addEventListener("click", plus);
    elementMinus.addEventListener("click", minus);
    elementKop.addEventListener("click", kop);

    /* Räkna upp antal produker */
    function plus() {
        /* Läsa av antal och summa */
        var antal = parseInt(elementAntal.textContent);
        var pris = parseInt(elementPris.textContent);

        /* Räkna upp */
        antal++;

        /* Räkna om summa */
        var summa = pris * antal;

        /* Skriva tillbaka */
        elementAntal.textContent = antal;
        elementSumma.textContent = summa;
    }
    /* Räkna ner antal produkter */

    function minus() {
        /* Läsa av antal */

        var antal = parseInt(elementAntal.textContent);
        var pris = parseInt(elementPris.textContent);
        /* Räkna ned */

        if (antal > 1) {
            antal--;
        }
        /* Räkna om summa */
      var summa = pris * antal;

        /* Skriva tillbaka */
        elementSumma.textContent = summa;
        elementAntal.textContent = antal;
    }

    function kop() {
        /* Läs av korgen */
        var korgen = parseInt(elementKorgen.textContent);
        var summa = parseInt(elementSumma.textContent);
        /* Addera antal * summa */
        korgen = korgen + summa;

        /* Skriv tillbaka */
        elementKorgen.textContent = korgen;
    }

}