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


$nyasida = str_replace($sordet, $nordet, $gamlasida); 

file_put_contents("text.html", $nyasida);

?>
</body>

</html>