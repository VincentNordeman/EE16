window.onload = start;

function start() {

    /* Hämta knapp info i html */
    const easy = document.querySelector("#easy");
    const hard = document.querySelector("#hard");
    const insane = document.querySelector("#insane");
    const canvas = document.querySelector("#myCanvas");

    var ctx = canvas.getContext("2d");
    var points = 0,
        lives = 3;
    var boll = {
        x: 0,
        y: 0
    };
    var keys = [];
    var monsters = [];

    var imgMonster = new Image();
    imgMonster.src = "./../bilder/Profile.jpg";

    var interval = 0;
    var startTid;
    var speed = 500;

    /* Lyssna på knapparna */
    easy.addEventListener("click", nyttSpel);
    hard.addEventListener("click", nyttSpel);
    insane.addEventListener("click", nyttSpel);

    function nyttSpel() {
        reset();
        speed = this.dataset.speed;

        startTid = Date.now();
        lives = 3;

        clearInterval(interval);
        interval = setInterval(monsterLager, speed);
    }

    function reset() {
        boll.x = 400;
        boll.y = 500;

        monsters = [];
    }

    class Monster {
        constructor() {
            this.x = Math.ceil(Math.random() * 790);
            this.y = 0;
            this.v = Math.ceil(Math.random() * 3);
            this.imgMonster = new Image();
            this.imgMonster.src = "./../bilder/Profile.jpg";
        }

        /* Monster  */
        ritaMonster() {
            ctx.beginPath();
            ctx.drawImage(this.imgMonster, this.x, this.y, 50, 50);
            ctx.closePath();
        }

        /* Skapa monster på en linje mellan 0-790px */
        spawnaMonster() {
            this.x = Math.ceil(Math.random() * 790);
        }

        fallaMonster() {
            this.y += this.v;
            this.ritaMonster(this.x);
        }

    }

    /* Rita boll */
    function ritaBoll(x, y) {
        ctx.beginPath();
        ctx.arc(x, y, 8, 0, Math.PI * 2, false)
        ctx.fillStyle = "blue";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
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

    /* Flyttar bollen höger och vänster */
    function uppdateraBoll() {
        if (keys["ArrowLeft"] && boll.x > 10) {
            boll.x -= 10;
        }
        if (keys["ArrowRight"] && boll.x < 790) {
            boll.x += 10;
        }
    }

    /* Poäng/Tid & liv utskrift */
    function highscore(points, lives) {
        ctx.font = "20px Arial";
        ctx.fillStyle = "red";
        ctx.fillText("Time: " + points + " Sec", 680, 20);
        ctx.fillText("Live: " + lives, 687, 40);
    }

    /* Poäng/Tid, liv och död */
    function traff() {
        for (var i = 0; i < monsters.length; i++) {
            if ((monsters[i].x <= boll.x) && (boll.x <= monsters[i].x + 50) && (monsters[i].y <= boll.y) && (boll.y <= monsters[i].y + 50)) {
                lives--;
                reset();
            } else {
                if (lives == 0) {
                    alert("You survived for " + points + " seconds");
                } else {
                    var tid = Date.now();
                    points = Math.ceil((tid - startTid) / 1000);
                }
            }
        }
    }

    reset();

    /* Skapar monsters */
    function monsterLager() {
        for (var i = 0; i < 2; i++) {
            var monster = new Monster();
            monsters.push(monster);
        }
    }

    interval = setInterval(monsterLager, speed);

    function gameloop() {
        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        /* Tar bort monster som nuddar botten */
        for (var i = 0; i < monsters.length; i++) {
            if (monsters[i].y > 600) {
                monsters.splice(i, 1);
            } else {
                monsters[i].fallaMonster();
            }
        }

        ritaBoll(boll.x, boll.y);
        traff();
        highscore(points, lives);
        uppdateraBoll();
        requestAnimationFrame(gameloop);
    }
    gameloop();
}