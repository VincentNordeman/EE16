window.onload = start;

function start() {

    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var antalKlossar;
    var keys = [];
    var klossar = [];

    racket = {
        x: 0,
        y: 0
    }

    /* Mall för skott */
    class Skott {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.hastighet = 0;
            this.imgSkott = new Image();
            this.imgSkott.src = "./IMG_20170903_220047_205.png";
            this.live = true;
            this.shot = false;
        }

        reset(y) {
            this.y = y;
            this.hastighet = 0;
        }
        rita() {
            ctx.beginPath();
            ctx.drawImage(this.imgSkott, this.x * 60 + 5, this.y * 60 + 5, 55, 55);
            ctx.closePath();
        }
        uppdatera() {
            if (this.shot) {
                this.y -= this.hastighet;
            }

        }
        kollision() {

        }
    }

    var skott1 = new Skott();

    /* Ge variabler */
    function reset() {
        /* Rackets position */
        racket.x = 350;
        racket.y = 580;

        skott1.reset = racket.y;

        antalKlossar = 0;
        skapaAllaKlossar();
    }


    /* Racket  */
    function ritaRacket(x, y) {
        ctx.beginPath();
        ctx.rect(racket.x, racket.y, 120, 10);
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
        if (keys["ArrowLeft"] && racket.x > 10) {
            racket.x -= 10;
        }
        if (keys["ArrowRight"] && racket.x < 720) {
            racket.x += 10;
        }
        if (keys[" "]) {
            skott1.shot = true;
        }
        if (!skott1.shot) {
            skott1.shot = racket.x + 35;
        }
    }

    /* Ange startvärde */
    reset();

    function gameloop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        uppdateraAllaKlossar();
        uppdateraRacket();
        skott1.rita();
        ritaRacket(racket.x, racket.y);
        requestAnimationFrame(gameloop);
    }

    gameloop();
}