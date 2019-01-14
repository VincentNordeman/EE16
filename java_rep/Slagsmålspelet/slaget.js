/* 
I den här uppgiften ska du skapa en slagsmålssimulator med två inblandade slagskämpar.
Simulatorn ska hålla reda på slagskämparnas namn och hp.
Simulatorn körs så länge båda slagskämparna har hp kvar.
Varje gång loopen körs – varje “runda” – så ska slagskämpe A slå B, och B ska slå A.
Ett slag innebär att motståndaren blir av med en slumpmässig mängd hp.
När striden är slut, presentera vinnaren – eller om båda slagskämparna kom under 0 samtidigt, förklara att det blev oavgjort.
VIKTIGT: Om du får mycket hjälp av en kamrat, skriv det i dina kommentarer!
*/

window.onload = start;

/* Koden som körs från start */
function start() {
    /* Hämta spelar id */
    const eInput1 = document.querySelector("#spelare1");
    const eInput2 = document.querySelector("#spelare2");
    const eP = document.querySelector("#resultat");
    const eKnapp = document.querySelector("#knapp");

    /* HP från start */
    let hp1 = 100;
    let hp2 = 100;

    eKnapp.addEventListener("click", runda);

    function runda() {
        /* Läs in namnen på spelarna */
        let spelare1 = eInput1.value;
        let spelare2 = eInput2.value;

        /* Slag mellan 1-10 */
        let slumptal1 = Math.ceil(Math.random() * 10 + 1);
        let slumptal2 = Math.ceil(Math.random() * 10 + 1);

        /* Slumptal - HP */
        hp1 = hp1 - slumptal1;
        hp2 = hp1 - slumptal2;

        /* Skriv resultatet av slaget */
        eP.innerHTML += spelare1 + " har " + hp1 + "HP" + ", " + spelare2 + " har " + hp2 + "HP" + "<br>";

        /* Vem har vunnit? */
        if (hp1 <= 0 && hp2 > 0) {
            eP.innerHTML += spelare2 + " har vunnit! ";
        } else {
            if (hp2 <= 0 && hp1 > 0) {
                eP.innerHTML += spelare1 + " har vunnit! ";
            } else {
                if (hp1 == 0 && hp2 == 0) {
                    eP.innerHTML += " Oavgjort! ";
                }
            }
        }
    }
}