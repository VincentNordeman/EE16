window.onload = start;

function start() {

    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var keys = [];
    var raket = {
        x: 0,
        y: 0,
        v: 0,
        h: 0
    };

    var imgRaket = new Image();
    imgRaket.src = "./tintins-raket.png";

    /* Ge variabler */
    function reset() {

        /* Rackets position */
        raket.x = 100;
        raket.y = 100;
        raket.v = 0;
        raket.h = 1;

    }


    /* Raket  */
    function ritaRaket() {

        function rad()
        raket.x = raket.h * Math.cos(raket.v);
        raket.y = raket.h * Math.cos(raket.v);
        ctx.rotate();
        ctx.beginPath();
        ctx.drawImage(imgRaket, raket.x, raket.y, 50, 50);
        ctx.closePath();
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

    function uppdateraRaket() {
        if (keys["ArrowLeft"]) {
            raket.x -= 10;
        }
        if (keys["ArrowRight"]) {
            raket.x += 10;
        }
        if (keys["ArrowUp"]) {
            raket.y -= 10;
        }


        if (raket.x < 0) {
            raket.x = 800;
        }
        if (raket.x > 800) {
            raket.x = 0;
        }
        if (raket.y < 0) {
            raket.y = 600;
        }
        if (raket.y > 800) {
            raket.y = 0;
        }
    }

    /* Ange startvärde */
    reset();

    function gameloop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        uppdateraRaket();
        ritaRaket();

        requestAnimationFrame(gameloop);
    }

    gameloop();
}