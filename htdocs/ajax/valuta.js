window.onload = start;

function start() {
    /* Hur vi kontaktar webbtjänsten  */
    const url = "https://openexchangerates.org/api/latest.json";
    const appId = "5f28403ee2b54eecae258327e75d1945"

    /* Element vi behöver läsa av eller skriva till */
    const eBelopp = document.querySelector("#belopp");
    const eValuta = document.querySelector("#valuta");
    const eResultat = document.querySelector("#resultat");

    eValuta.addEventListener("change", vaxla);

    function vaxla() {
        let belopp = eBelopp.value;
        console.log(belopp);
        let = valuta = eValuta.value;
        console.log(valuta);

        /* Skicka ajax-anrop till webbtjänsten */
        let ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
            if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
                let kurs = JSON.parse(this.responseText);
                eResultat.value = belopp * kurs.rates[valuta];                
            }
        };
        ajax.open("GET", url + "?app_id=" + appId, true);
        ajax.send();
    }
}