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
    var key = [];
    var spelare = {
        y: 0,
        x: 0
    };

    var monster = {
        y: 0,
        x: 0
    };

    var imgSpelare = new Image();
    imgSpelare.src = "./../bilder/IMG_20170903_220047_205.png";
    var imgMonster = new Image();
    imgMonster.src = "./../bilder/Profile.jpg";

    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1],
        [1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1],
        [1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1, 1],
        [1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1],
        [1, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1],
        [1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    function reset() {
        spelare.y = 1;
        spelare.x = 2;

        monster.y = 2;
        monster.x = 4;
    }


    /* Kloss  */
    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 60, 60);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.closePath();
    }

    function ritaSpelare(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgSpelare, x * 60 + 5, y * 60 + 5, 55, 55);
        ctx.closePath();
    }

    function ritaMonster(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgMonster, x * 60 + 5, y * 60 + 5, 55, 55);
        ctx.closePath();
    }

    function uppdateraMonster() {
        monster.x += Math.ceil(Math.random() * 5 - 2);
        monster.y += Math.ceil(Math.random() * 5 + 2);

        if (monster.x < 0) {
            monster.x = 12;
        }
        if (monster.x > 12) {
            monster.x = 0;
        }
        if (monster.y < 0) {
            monster.y = 12;
        }
        if (monster.y > 12) {
            monster.y = 0;
        }
    }

    setInterval(uppdateraMonster, 600)


    function ritaLabyrint() {
        /* Rita ut mapen i arrayen */
        /* Höjden */
        for (var j = 0; j < 10; j++) {
            /* Bredden */
            for (var i = 0; i < 12; i++) {
                if (map[j][i] == 1) {
                    ritaKloss(i * 60, j * 60);
                }
            }
        }
    }

    function dead() {
        if (monster.x == spelare.x && monster.y == spelare.y) {
            alert ("dead");
        }
    }


    /* Lyssna på piltangenterna */
    document.addEventListener("keydown", uppdateraSpelare);

    function uppdateraSpelare(e) {

        var gamlaX = spelare.x;
        var gamlaY = spelare.y;

        if (e.key == "ArrowLeft") {
            spelare.x -= 1;
        }
        if (e.key == "ArrowRight") {
            spelare.x += 1;
        }
        if (e.key == "ArrowUp") {
            spelare.y -= 1;
        }
        if (e.key == "ArrowDown") {
            spelare.y += 1;
        }


        if (map[spelare.y][spelare.x] == 1) {
            spelare.x = gamlaX;
            spelare.y = gamlaY;
        }

    }


    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600);
        ritaLabyrint();
        dead();
        ritaSpelare(spelare.x, spelare.y);
        ritaMonster(monster.x, monster.y);
        requestAnimationFrame(gameLoop);
    }


    gameLoop();
}