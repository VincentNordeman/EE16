<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Räkna ord</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

$url = $_POST["url"];
$sordet = $_POST["sordet"];
/* Läs in webbsidan */
$innehall = file_get_contents($url); 
$antal = 0; 
$pos = 0; 

while ($pos != false) {
    /* Hitta första ordet */
    $pos = stripos($innehall, $sordet, $pos + 1);
    echo "<p>$pos</p>"; /* Debugg */
    $antal++; 
}

/* Skriv ut resultat */
echo "<p>Vi har hittat på $antal gånger i webbsidan.</p>";

?>
</body>

</html>