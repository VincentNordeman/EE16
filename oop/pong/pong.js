window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    function boll(x, y) {

        /* Boll */
        ctx.beginPath();
        ctx.arc(x, y, 10, 0, Math.PI * 2, false)
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();
    }

    /* Racket  */
    function racket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 10, 80);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.closePath();
    }

    /* Poäng, liv utskrift */
    function highscore(points, lives) {
        ctx.font = "20px Arial";
        ctx.fillStyle = "#red";
        ctx.fillText("Poäng: " + points, 600, 50);
        ctx.fillText("Liv: " + lives, 600, 100);
    }

    function reset() {
        bollX = 50;
        bollY = Math.ceil(Math.random() * 100);
        dx = 2;
        dy = 2;
    }

    /* Animationsloopen */
    var bollX, bollY, dx, dy, racketX, racketY, points;
    bollX = Math.ceil(Math.random() * 100);
    bollY = Math.ceil(Math.random() * 100);
    dx = 5;
    dy = 5;
    racketX = 10;
    racketY = 100;
    points = 0;
    lives = 3;

    /* Lyssna på piltangenterna */
    document.addEventListener("keydown", flyttaRacket);

    function flyttaRacket(e) {
        if (e.key == "ArrowUp") {
            if (racketY > 10) {
                racketY -= 25;
            }
        }
        if (e.key == "ArrowDown") {
            if (racketY < 510) {
                racketY += 25;
            }
        }
    }

    reset();

    function loop() {

        /* Sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);

        /* Boll */
        boll(bollX, bollY);
        bollX += dx;
        bollY -= dy;

        /* Bollen ska studsa */
        if (bollY <= 0) {
            dy = -dy;
        }
        if (bollX >= 800) {
            dx = -dx;
        }
        if (bollY >= 600) {
            dy = -dy;
        }
        if (bollX <= 0) {
            dx = -dx;
        }

        /* Rita ut racket */
        racket(racketX, racketY);

        /* Bollen ska studsa */
        if (bollX <= 20) {
            if ((bollY >= racketY) && (bollY <= (racketY + 70))) {
                dx = -dx;
                points += 1;
            } else {
                if (lives == 0) {
                    alert("Spelet är över!");
                } else {
                    lives--;
                    reset();
                }
            }
        }
        highscore(points, lives);
        requestAnimationFrame(loop);
    }

    /* var timer = setInterval(loop, 40); */
    loop();
}