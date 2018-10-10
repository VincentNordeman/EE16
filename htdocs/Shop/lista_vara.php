<?php
/*
* Läsa in alla varor och skapa en lista med alla varor  
* PHP version 7
* @category   Varor
* @author     Vincent Nordeman
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Alla varor</h1>
    </header>
    <main>
        <?php
/* Öppna textfilen och läsa innehållet och skriv ut det */

$allaRader = file("beskrivning.txt");

foreach ($allaRader as $rad) {
    echo $rad . "<br>";
    
    /* Plocka isär raden i deras beståndsdelar */
    $delar = explode ("¤", $rad);
    $beskrivning = $delar[0];
    $pris = $delar[1];
    $bild = $delar[2];
    
    echo "<div class=\"vara\">\n";
    echo "<img src=\"./varor/$bild\" alt=\"$beskrivning\">\n";
    echo "<p>$beskrivning</p>\n";
    echo "<p>$pris</p>\n";
    echo "<hr>\n";
    echo "</div>\n";
    
    
}   
?>
    </main>
    <footer>
        Vincent Nordeman
    </footer>

</body>

</html>