<!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tre slumpvalda ordspråk</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php $allaOrdsprak[0]="Arga katter får rivet skinn.";
$allaOrdsprak[1]="Anfall är bästa försvar.";
$allaOrdsprak[2]="Att skiljas är att dö en smula.";
$allaOrdsprak[3]="Den som söker han finner.";
$allaOrdsprak[4]="Högmod går före fall.";
$allaOrdsprak[5]="Ju fler kockar desto sämre soppa";
$allaOrdsprak[6]="Lärdom är mer värt än guld.";
$allaOrdsprak[7]="Man kan inte lära en gammal hund att sitta.";
$allaOrdsprak[8]="Om man gapar över mycket, mister man ofta hela stycket.";
$allaOrdsprak[9]="Nya kvastar sopar bäst.";

echo "<h3>Alla ord språk </h3>";

foreach ($allaOrdsprak as $ordsprak) {
    echo "<p>$ordsprak</p>";
}

/* Räkna ordspråk */
echo "<h3>Räkna ordspråk</h3>";
$antalOrdsprak=count ($allaOrdsprak);
echo "<p>Jag har $antalOrdsprak positioner i min array</p>";

/* Skriv ut 3 ordspråk */
echo "<h3>Skriv ut 3 ordspråk</h3>";
for ($i=0;
$i < 3;

$i++) {
    echo "<p>$allaOrdsprak[$i]";
}

/* Skriv ut alla ordspråk */
echo "<h3>Skriv ut alla ordspråk</h3>";
for ($i=0;
$i < $antalOrdsprak;

$i++) {
    echo "<p>$allaOrdsprak[$i]";
}

/* Slumpa 3 olika ordspråk */
echo "<h3>Slumpa 3 olika ordspråk</h3>";
$allaSlumptal=[];
for ($i=0; $i < 3; $i++) {
    
    do {
        $slumptal=rand(0, 9);
    } while (in_array($slumptal, $allaSlumptal));
    
    $allaSlumptal[]=$slumptal;
    
    echo "<p>$allaOrdsprak[$slumptal]</p>";
}

?>
    </body>

    </html>