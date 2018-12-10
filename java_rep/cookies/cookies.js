/* http://www.chinese-fortune-cookie.com/fortune-cookie-quotes.html */

/* När webbsidan laddats klart kör start() */
window.onload = start;

/* Start-delen */
function start() {

    /* Välj ut alla elementen att jobba med: target */
    const knapp1 = document.querySelector("#knapp1");
    const knapp2 = document.querySelector("#knapp2");
    const knapp3 = document.querySelector("#knapp3");
    const slumpkaka = document.querySelector("#slumpkaka");

    var cookies = [
        "It takes more than good memory to have good memories.",
        "A thrilling time is in your immediate future.",
        "Your blessing is no more than being safe and sound for the whole lifetime.",
        "Plan for many pleasures ahead.",
        "The joyfulness of a man prolongeth his days.",
        "Your everlasting patience will be rewarded sooner or later.",
        "Make two grins grow where there was only a grouch before.",
        "Something you lost will soon turn up.",
        "Your heart is pure, and your mind clear, and your soul devout.",
        "Excitement and intrigue follow you closely wherever you go!"
    ];

    /* Knapp 1: skriv ut en cookie i loggen */
    knapp1.addEventListener("click", skrivIKonsolen);

    function skrivIKonsolen() {
        console.log("There is a true and sincere friendship between you and your friends.");
    }

    /* Knapp 2: skriv ut cookie i webbsidan */
    knapp2.addEventListener("click", skrivUtIWebbsidan);

    function skrivUtIWebbsidan() {
        slumpkaka.innerHTML = "<p>You find beauty in ordinary things, do not lose this ability.</p>";
    }

    /* Knapp 3: skriv ut cookies en-efter-en som en lista */
    knapp3.addEventListener("click", listaCookies);

    function listaCookies() {

        var slumptal = Math.ceil(Math.random() * 10 - 1);

        slumpkaka.innerHTML += "<p>" + cookies[slumptal] + "</p>";

    }
}