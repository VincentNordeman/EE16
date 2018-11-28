/* Kör koden när webbsidan laddats klart */
window.onload = start;

function start() {

    /* Elementen vi jobbar med */
    const elementTal1 = document.querySelector("#tal1");
    const elementTal2 = document.querySelector("#tal2");
    const elementPlus = document.querySelector("#plus");
    const elementMinus = document.querySelector("#minus");
    const elementGgr = document.querySelector("#ggr");
    const elementResultat = document.querySelector("#resultat");

    /* Addera tal1 med tal2 = resultat */
    elementPlus.addEventListener("click", plus);
    elementMinus.addEventListener("click", minus);
    elementGgr.addEventListener("click", ggr);

    function plus() {
        var tal1 = parseInt(elementTal1.value);
        var tal2 = parseInt(elementTal2.value);
        var resultat = tal1 + tal2;
        elementResultat.value = resultat;
    }

    function minus() {
        var tal1 = parseInt(elementTal1.value);
        var tal2 = parseInt(elementTal2.value);
        var resultat = tal1 - tal2;
        elementResultat.value = resultat;
    }

    function ggr() {
        var tal1 = parseInt(elementTal1.value);
        var tal2 = parseInt(elementTal2.value);
        var resultat = tal1 * tal2;
        elementResultat.value = resultat;
    }

}