window.onload = start;

function start() {

    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var bollX, bollY, vx, vy, racketX, racketY, antalKlossar;
    var keys = [];
    var klossar = [];

    /* Ge variabler */
    function reset() {
        /* Bollens startposition */
        bollX = 400;
        bollY = 400;
        /* Bollens hastighet */
        vx = Math.ceil(Math.random() * 5 - 3);
        vy = Math.ceil(Math.random() * 5 + 3);
        /* Rackets position */
        racketX = 350;
        racketY = 580;
    }

    /* Boll */
    function ritaBoll(x, y) {
        ctx.beginPath();
        ctx.arc(x, y, 10, 0, Math.PI * 2, false)
        ctx.fillStyle = "blue";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();
    }

    /* Racket  */
    function ritaRacket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 120, 10);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.closePath();
    }

    /* Klossar  */
    function ritaKlossar(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 100, 20);
        ctx.fillStyle = "green";
        ctx.fill();
        ctx.closePath();
    }

    /* Skapa en array för alla klossar */
    function skapaAllaKlossar() {
        /* Skapa rader */
        for (let j = 1; j < 6; j++) {
            klossar[j] = [];
            /* Skapa klossar */
            for (let i = 0; i < 6; i++) {
                ritaKlossar(45 + i * 120, j * 50);
                klossar[j][i] = {
                    x: 45 + i * 120,
                    y: j * 50,
                    hit: false
                };
            }
        }
    }

    /* Rita ut alla klossar som finns i arrayen */
    function uppdateraAllaKlossar() {
        /* Skapa rader */
        for (let j = 1; j < 6; j++) {
            /* Skapa klossar */
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    ritaKlossar(45 + i * 120, j * 50);
                }
            }
        }
    }

    /* Ta bort kloss vid träff */
    function traffaKloss() {
        for (let j = 1; j < 6; j++) {
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    if ((bollX >= klossar[j][i].x) &&
                        (bollX <= (klossar[j][i].x + 100)) &&
                        (bollY >= klossar[j][i].y) &&
                        (bollY <= (klossar[j][i].y) + 20)) {
                        klossar[j][i].hit = true;
                        vy = -vy;
                        antalKlossar--;
                    }
                }
            }
        }
    }

    /* Lyssna på piltangenterna */
    document.addEventListener("keydown", tryckPil);
    document.addEventListener("keyup", slappPil);

    function tryckPil(e) {
        keys[e.key] = true;
    }

    function slappPil(e) {
        keys[e.key] = false;
    }

    function uppdateraRacket() {
        if (keys["ArrowLeft"] && racketX > 10) {
            racketX -= 10;
        }
        if (keys["ArrowRight"] && racketX < 720) {
            racketX += 10;
        }
    }

    /* Ange startvärde */
    reset();
    skapaAllaKlossar();

    function gameloop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        /* Rita ut bollen */
        ritaBoll(bollX, bollY);
        bollX += vx;
        bollY += vy;
        /* Rita ut racket */
        ritaRacket(racketX, racketY);
        /* Alla klossar */
        uppdateraAllaKlossar();

        /* Bollen ska studsa */
        if (bollY < 0) {
            vy = -vy;
        }
        if (bollX < 0 || bollX > 800) {
            vx = -vx;
        }

        /* Bollen ska studsa på racket */
        /* Kolla om bollen är nere på bottenkanten */
        if (bollY >= 570) {
            /* Kolla om bollen är nära racketen */
            if ((bollX >= (racketX - 20)) && (bollX <= (racketX + 90))) {
                vy = -vy;
            }
        }
        if (bollY >= 600) {
            alert("Game over");
            reset();
        }

        if (antalKlossar == 0) {
            alert("Grattis");
        }

        traffaKloss();
        uppdateraRacket();
        ritaRacket(racketX, racketY);
        requestAnimationFrame(gameloop);
    }

    gameloop();
}