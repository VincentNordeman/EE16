<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
</head>
<body>

<h1>Mina svåra blogg</h1>
    <nav>
    <ul>
        <li><a href="index.php">Hemsida</a></li>
        <li><a href="skriva.php">Skriv inlägg</a></li>
        <li><a href="lasa.php">Läs inlägg</a></li>
    </ul>    
    </nav>

<?php
/* Öppna textfilen och läsa innehållet och skriv ut det */

$allaRader = file("inlaggen.txt");
echo "<p>";
foreach ($allaRader as $rad) {
 echo $rad . "<br>";
}   
echo "<p>"; 

?>

</body>
</html>



