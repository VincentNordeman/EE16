window.onload = start;

function start() {


    /* Läs in alla element */
    const eOrdet = document.querySelector("#ordet");
    const eSvaret = document.querySelector("#svaret");
    const eOutput = document.querySelector("#output");
    const eRatta = document.querySelector("#ratta");
    const eNytt = document.querySelector("#nytt");

    var slumptal = 0;
    var ord = [
        ["Fun", "Kul"],
        ["Correct", "Korrekt"],
        ["Easy", "Lätt"],
        ["Hungry", "Hungrig"],
        ["Fast", "Fort"],
        ["Car", "Bil"],
        ["Library", "Bibliotek"],
        ["Cat", "Katt"],
        ["Plane", "Flygplan"],
        ["Holiday", "Semester"]
    ]

    /* Rätta svar när man klickar på knappen */
    eRatta.addEventListener("click", rattaSvar);

    function rattaSvar() {
        var svaret = eSvaret.value;
        var ordet = ord[slumptal][1];

        if (svaret == ordet) {
            eOutput.innerHTML = "Rätt!";
        } else {
            eOutput.innerHTML = "Fel!";
        }
    }


    /* Ge en ny fråga */
    eNytt.addEventListener("click", nyFraga);

    function nyFraga() {
        slumptal = Math.ceil(Math.random() * 10 - 1);
        eOrdet.value = ord[slumptal][0];
    }
    nyFraga();
}