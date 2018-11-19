/* Kör koden när webbsidan laddats klart */
window.onload = start;

function start() {
    /* Variabler vi behöver */
    var bilder = [
        "./foton/benjamin-voros-1160571-unsplash.jpg",
        "./foton/daniel-j-schwarz-1160357-unsplash.jpg",
        "./foton/daniel-minarik-1158512-unsplash.jpg",
        "./foton/jordan-mcgee-1159031-unsplash.jpg",
        "./foton/patrick-untersee-1160596-unsplash.jpg",
        "./foton/sakkarin-kaewsukho-1160157-unsplash.jpg",
        "./foton/zac-ong-1161492-unsplash.jpg"
    ];

    /* Lista på alla element vi behöver */

    const elementYta = document.querySelector(".yta");
    const elementFram = document.querySelector(".fa-arrow-circle-left");
    const elementBak = document.querySelector(".fa-arrow-circle-right");

    /* Lyssna på klick */

    elementFram.addEventListener("click", fram);
    elementBak.addEventListener("click", bak);

    /* Nästa bild */
    function fram() {

    }

    function bak() {

    }
}