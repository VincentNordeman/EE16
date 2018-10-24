/* När webbsidan laddat klart kör "start" */
window.onload = start;

function start() {

    /* FÖr att lagra alla köpta varor */
    var data = [];
    const elementTotal = document.querySelector("#total");
    const elementAntalVaror = document.querySelector("#antalVaror");

    /* Lyssna på klick på hela sida */
    const elementKontainer = document.querySelector(".kontainer");
    elementKontainer.addEventListener("click", klick);

    /* Vad händer om man klickat på sidan */
    function klick(e) {
        console.log("Nu har vi en klick event på" + e.target.nodeName);

        /* Har man klickat på en cell */
        if (e.target.nodeName === "TD") {
            rakna(e.target);
        }
    }
    /* Nu räknar den */
    function rakna(cell) {
        console.log("Klick i en cell");

        /* Leta lätt på närmast #antal */
        const foralder = cell.parentNode.parentNode.parentNode.parentNode;
        const elementBeskrivning = foralder.querySelector("#beskrivning");
        const elementAntal = foralder.querySelector("#antal");
        const elementPris = foralder.querySelector("#pris");
        const elementSumma = foralder.querySelector("#summa");
        const elementKorgen = document.querySelector("#korgen");

        var antal = parseInt(elementAntal.textContent);
        var beskrivning = elementBeskrivning.textContent;
        var pris = parseInt(elementPris.textContent);
        var summa = parseInt(elementSumma.textContent);
        var total = parseInt(elementTotal.value);
        var antalVaror = parseInt(elementAntalVaror.value);

        /* Klickade man i cellen #plus */
        if (cell.id === "plus") {
            /* Räkna upp */
            antal++;

            /* Räkna om summa */
            var summa = pris * antal;

            /* Skriva tillbaka */
            elementAntal.textContent = antal;
            elementSumma.textContent = summa;
        }

        /* Klickade man i cellan #minus */
        if (cell.id === "minus") {
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
        /* Klickade man i cellen #kop */
        if (cell.id === "kop") {
            /* Addera antal *summa */
            total = total + summa;

            /* Räkna upp totala antal varor */
            antalVaror = antalVaror + antal;

            /* Skriva tillbaka */
            elementTotal.value = total  + "kr";
            elementAntalVaror.value = antalVaror;

            /* Spara undan korgen i den dolda input */
            data.push({ "beskrivning": beskrivning, "antal": antal, "summa": summa, "pris": pris });
            elementKorgen.value = JSON.stringify(data);
        }
    }
}