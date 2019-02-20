window.onload = start;

function start() {


    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var bollX, bollY, monsterX, monsterY;
    var keys = [];
    var monster = [];

    var imgMonster = new Image();
    imgMonster.src = "./../bilder/IMG_20170903_220047_205.png";

    function reset() {

        bollX = 400;
        bollY = 500;

        monsterX = 350;
        monsterY = 50;
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

    /* Monster  */
    function ritaMonster(x) {
        ctx.beginPath();
        ctx.drawImage(imgMonster, x, monsterY, 50, 50);
        ctx.closePath();
    }

    function fallaMonster() {
        monsterX = Math.ceil(Math.random() * 1400);
        ritaMonster(monsterX);
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

    function uppdateraBoll() {
        if (keys["ArrowLeft"] && bollX > 10) {
            bollX -= 15;
        }
        if (keys["ArrowRight"] && bollX < 1510) {
            bollX += 15;
        }
    }

    /* Ange startvärde */
    reset();

    function gameloop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        ritaBoll(bollX, bollY);

        fallaMonster();
        uppdateraBoll();
        requestAnimationFrame(gameloop);
    }

    gameloop();
}