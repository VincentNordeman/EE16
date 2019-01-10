<?php
/* echo file_get_contents("chatt.txt"); */

/* Läs in allaa rader i en array */
$allaRader = file("chatt.txt");
$antalRader = count($allaRader);
$maxRad = 10;

if ($antalRader < $maxRad) {
    $maxRad = $antalRader;
}

for ($i = $antalRader - $maxRad; $i < $antalRader; $i++) { 
    echo $allaRader[$i];
}
?>
