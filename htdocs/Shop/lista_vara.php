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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
    <header>
        <h1>Alla varor</h1>
        <div id="korgen">0kr</div>
    </header>
    <main>
        <?php
/* Öppna textfilen och läsa innehållet och skriv ut det */

$allaRader = file("beskrivning.txt");

foreach ($allaRader as $rad) {
    
    /* Plocka isär raden i deras beståndsdelar */
    $delar = explode ("¤", $rad);
    $beskrivning = $delar[0];
    $pris = $delar[1];
    $bild = $delar[2];
    
    echo "<div class=\"vara\">\n";
    echo "<img src=\"./varor/$bild\" alt=\"$beskrivning\">\n";
    echo "<p>$beskrivning</p>\n";
    echo "<p>Styckpris: <span id=\"pris\">$pris</span> kr</p>\n";
    echo "<p>Summa: <span id=\"summa\"> $pris</span> kr </p>\n";
    
    echo "<table>\n";
    echo "<tr>\n";
    echo "<td id=\"antal\" rowspan=\"2\">1</td>\n";
    echo "<td id=\"plus\">+</td>\n";
    echo "<td id=\"kop\"rowspan=\"2\">Köp</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td id=\"minus\">-</td>\n ";
    echo "</tr>\n";
    echo "</table>\n";
    
    echo "</div>\n"; 
}   
?>
    </main>
    <footer>
        Vincent Nordeman
    </footer>
</div>
<script src="script.js"></script>
</body>
</html>