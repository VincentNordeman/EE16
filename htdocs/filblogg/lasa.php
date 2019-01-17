<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php include "header.inc"?>

<main>


<?php
/* Öppna textfilen och läsa innehållet och skriv ut det */

$allaRader = file("inlaggen.txt");

foreach ($allaRader as $rad) {
 echo $rad . "<br>";
}   

?>

</main> 
<footer>
Vincent Nordeman
</footer>

</body>
</html>



