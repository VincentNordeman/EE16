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
$nordet = $_POST["nordet"];

/* Läs in webbsidan */
$gamlasida = file_get_contents($url); 
$nyasida = "";
$antal = -1; 
$start = 0; 
$slut = 1; 

while ($slut != false) {
    /* Hitta första ordet */
    $slut = stripos($gamlasida, $sordet, $start + 1);

    /* Plocka ut textdelen framför hittade ordet */
    $nyasida = substr("$gamlasida", $start, $slut ) . $nordet; 
    $start = $slut + strlen($sordet);
    
    $antal++; 
}
file_put_contents("text.html", $nyasida);




/* Skriv ut resultat */
echo "<p>Vi har hittat $antal gånger i webbsidan.</p>";

?>
</body>

</html>