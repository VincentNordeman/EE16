window.onload = start;

function start() {

    /* Läs in alla element */
    const eTal = document.querySelector("#tal");
    const eFarg = document.querySelector("#farg");
    const eNamn = document.querySelector("#namn");
    const eadjektiv = document.querySelector("#adjektiv");
    const eKnapp = document.querySelector("button");

    const eFel = document.querySelector(".fel");
    const eOutput = document.querySelector(".output");

    /* Lyssna på knappen */
    eKnapp.addEventListener("click", kar);

    /* Kör när man klickar på knappen */
    function kar() {

        /* Hämta värdet på alla inputs */
        let tal = Number(eTal.value);
        let farg = (eFarg.value);
        let namn = (eNamn.value);
        let adjektiv = (eadjektiv.value);
        let fel = (eFel.value);
        let output = (eOutput.value);

        eFel.innerHTML = "";

        /* Kolla talet */
        if (tal <= 10 && tal >= 1) {
            eOutput.innerHTML = "Idag åt jag " + tal + " frallor till frukost. Jag blev alldeles " + farg + " i ansiktet. " + namn + " sa till mig att jag är en " + adjektiv + " kille.";
        } else {
            eFel.innerHTML = "Du måste ha ett tal mellan 1-10!<br>";
        }

        /* Kolla färgerna */
        if (farg == "gul" || farg == "röd" || farg == "blå") {
            eOutput.innerHTML = "Idag åt jag " + tal + " frallor till frukost. Jag blev alldeles " + farg + " i ansiktet. " + namn + " sa till mig att jag är en " + adjektiv + " kille.";
        } else {
            eFel.innerHTML += "Färgen måste vara: röd, gul eller blå!<br>";
        }

        /* Kolla Namnet */
        if (namn != "") {
            eOutput.innerHTML = "Idag åt jag " + tal + " frallor till frukost. Jag blev alldeles " + farg + " i ansiktet. " + namn + " sa till mig att jag är en " + adjektiv + " kille.";
        } else {
            eFel.innerHTML += "Namn saknas!<br>";
        }

        /* Kolla Adjektiv */
        if (adjektiv != "") {
            eOutput.innerHTML = "Idag åt jag " + tal + " frallor till frukost. Jag blev alldeles " + farg + " i ansiktet. " + namn + " sa till mig att jag är en " + adjektiv + " kille.";
        } else {
            eFel.innerHTML += "Adjektiv saknas!<br>";
        }
    }
}