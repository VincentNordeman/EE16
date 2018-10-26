/* När webbsidan laddats klart kör start() */
window.onload = start;

/* Start-delen */
function start() {
    /* Välj ut alla elementen att jobba med: target */
    const suddigKnapp = document.querySelector("#suddigKnapp");
    const graskalaKnapp = document.querySelector("#graskalaKnapp");
    const sepiaKnapp = document.querySelector("#sepiaKnapp");
    const img = document.querySelector("img");

    /* Knapp ett gör bilden suddig */
    suddigKnapp.addEventListener("click", suddig);

    function suddig() {
        img.classList.remove("suddigt", "graskala", "sepia");
        img.classList.add("suddigt");

    }

    /* Knapp två gör bilden svartvit */
    graskalaKnapp.addEventListener("click", graSkala);

    function graSkala() {
        img.classList.remove("suddigt", "graskala", "sepia");
        img.classList.add("graskala");
    }

    /* Knapp tre gör bilden sepia */
    sepiaKnapp.addEventListener("click", sepia);

    function sepia() {
        img.classList.remove("suddigt", "graskala", "sepia");
        img.classList.add("sepia");
    }

}