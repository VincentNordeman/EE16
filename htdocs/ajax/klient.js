window.onload = start;

function start() {
    const eNamn = document.querySelector("input");
    const eText = document.querySelector("textarea");
    const eKnapp = document.querySelector("button");
    let url = "http://10.151.171.209/ajax/klient.php";

    eKnapp.addEventListener("click", skicka);

    function skicka() {
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaText);
        function sparaText() {
            console.log(this.responseText);
        }
        ajax.open("POST", url, true);

        //Läs av formulärets inehåll// 
        let formData = new FormData();
        formData.append("namn", eNamn.value);
        formData.append("meddelande", eText.value);

        /* Nu, skicka data */
        ajax.send(formData);
    }
}