/* 
 * Enkelt bildgalleri.
 * Visa bilden större när man klickar på knappen.
 */

/* När webbsidan laddats klart kör start() */
window.onload = start;

/* Start-delen */
function start() {

    /* Vilka element arbetar vi med? */
    const eleImg = document.querySelector("img");
    const eleDavid = document.querySelector("#david");
    const eleHarvey = document.querySelector("#Harvey");
    const eleKerensa = document.querySelector("#Kerensa");
    const eleShifaaz = document.querySelector("#Shifaaz");

    /* Vilka händelser behöver vi lyssna på? */
    eleDavid.addEventListener("click", visaDavid);
    eleHarvey.addEventListener("click", visaHarvey);
    eleKerensa.addEventListener("click", visaKerensa);
    eleShifaaz.addEventListener("click", visaShifaaz);

    /* Vad ska hända när man klickat på knapp1? */
    function visaDavid() {
        eleImg.src ="./bilder/david-von-diemar-1118935-unsplash.jpg";
    }
    function visaHarvey() {
        eleImg.src ="./bilder/harvey-enrile-1132518-unsplash.jpg";
    }
    function visaKerensa() {
        eleImg.src ="./bilder/kerensa-pickett-1132519-unsplash.jpg";
    }
    function visaShifaaz() {
        eleImg.src ="./bilder/shifaaz-shamoon-1113392-unsplash.jpg";
    }
}