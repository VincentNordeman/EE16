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

    var points = 0;
    var map = [];
    var key = [];
    var spelare = {
        y: 0,
        x: 0
    };

    var imgSpelare = new Image();
    imgSpelare.src = "./../bilder/IMG_20170903_220047_205.png";

    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1],
        [1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1],
        [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1],
        [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1],
        [1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    class Mynt {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.imgMynt = new Image();
            this.imgMynt.src = "./../bilder/download.jpg";
            this.live = true;
        }
        reset() {
            this.x = Math.ceil(Math.random() * 12);
            this.y = Math.ceil(Math.random() * 9);
        }
        ritaMynt() {
            ctx.beginPath();
            ctx.drawImage(this.imgMynt, this.x * 60 + 5, this.y * 60 + 5, 55, 55);
            ctx.closePath();
        }
        uppdateraMynt() {
            if (this.live) {
                if (map[this.y][this.x] == 1) {
                    this.x = Math.ceil(Math.random() * 12);
                    this.y = Math.ceil(Math.random() * 9);
                } else {
                    this.ritaMynt();
                }
            }
        }
        getPoint() {
            if (this.live && this.x == spelare.x && this.y == spelare.y) {
                points += 10;
                this.live = false;
            }
        }
    }

    var mynt1 = new Mynt();
    var mynt2 = new Mynt();


    class Monster {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.imgMonster = new Image();
            this.imgMonster.src = "./../bilder/Profile.jpg";
        }

        reset() {}


        ritaMonster() {
            ctx.beginPath();
            ctx.drawImage(this.imgMonster, this.x * 60 + 5, this.y * 60 + 5, 55, 55);
            ctx.closePath();
        }
        uppdateraMonster() {

            var gamlaMonsterY = monster.y;
            var gamlaMonsterX = monster.x;

            monster.x += Math.ceil(Math.random() * 3 - 2);
            monster.y += Math.ceil(Math.random() * 3 - 2);

            if (map[monster.y][monster.x] == 1) {
                monster.x = gamlaMonsterX;
                monster.y = gamlaMonsterY;
            }
        }
    }

    var monster1 = new Monster();
    var monster2 = new Monster();

    /* Kloss  */
    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 60, 60);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.closePath();
    }

    function ritaSpelare() {
        ctx.beginPath();
        ctx.drawImage(imgSpelare, spelare.x * 60 + 5, spelare.y * 60 + 5, 55, 55);
        ctx.closePath();
    }

    function highscore() {
        ctx.font = "20px Arial";
        ctx.fillStyle = "#red";
        ctx.fillText("Poäng: " + points, 600, 50);
    }

    function reset() {
        spelare.y = 1;
        spelare.x = 1;

        monster.y = 2;
        monster.x = 4;

        mynt1.reset();
        mynt2.reset();
    }

    function ritaLabyrint() {
        /* Rita ut mapen i arrayen */
        /* Höjden */
        for (var j = 0; j < 10; j++) {
            /* Bredden */
            for (var i = 0; i < 13; i++) {
                if (map[j][i] == 1) {
                    ritaKloss(i * 60, j * 60);
                }
            }
        }
    }

    setInterval(uppdateraMonster, 100);


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


    function dead() {
        if (monster.x == spelare.x && monster.y == spelare.y) {
            alert("Dead!");
            reset();
        }
    }


    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600);
        ritaLabyrint();
        dead();

        mynt1.uppdateraMynt();
        mynt2.uppdateraMynt();
        mynt1.getPoint();
        mynt2.getPoint();
        
        monster1();
        monster2();
        highscore();
        ritaSpelare(spelare.x, spelare.y);
        ritaMonster(monster.x, monster.y);
        requestAnimationFrame(gameLoop);
    }


    gameLoop();
}