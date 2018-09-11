/* Kör koden när webbsidan laddats klart */
window.onload = init;

function init() {

    document.querySelector("#knapp").addEventListener("click", skrivHälsning);

    console.log("slut"); 
}

function skrivHälsning() {

 /* Läs in text */
 var namn = document.querySelector("#namn").value; 
    
    /* Skriv ut text */
    document.querySelector("#svar").textContent = "hej" + namn + " vad kul att du är här!";        

}