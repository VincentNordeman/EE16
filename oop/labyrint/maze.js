/* Skapa js grunden */
/* Skapa canvas */
/* Skapa funktionen gameloop */
/* Skapa funktionen reset */
/* Skapa variabler: array map, character, array keys */
/* Skapa labyrinten */
/* Rita ut mapen */

window.onload = start;

function start() {

    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var map = [];
    var keys = [];
    var character = {
        x: 0,
        y: 0
    };

    map = [
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0],
        [1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 1],
        [1, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1],
        [1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 1],
        [1, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
        [1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];


    /* Kloss  */
    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 10, 10);
        ctx.fillStyle = "green";
        ctx.fill();
        ctx.closePath();
    }

    /* Alla variablers värde */
    function reset() {

        /* Rita ut mapen i arrayen */
        /* Höjden */
        for (var j = 0; j < 12; j++) {
            /* Bredden */
            for (var i = 0; i < 12; i++) {
                ritaKloss(i * 10, j * 10);
            }
        }
    }


    reset();

    function gameLoop() {


        requestAnimationFrame(gameLoop);
    }


    gameLoop();
}