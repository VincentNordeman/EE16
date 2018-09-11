/* Kör koden när webbsidan laddats klart */
window.onload = init;

function init() {



    document.querySelector("#knapp").addEventListener("click", skrivUt);
    console.log(slumpTal); 
 }
    function skrivUt() {
        var slumpTal = Math.floor(Math.random() * 100 + 1);
        document.querySelector("#svar").textContent = slumpTal;
}

