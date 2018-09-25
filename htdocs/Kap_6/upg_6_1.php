<?php
/*
* Kontrollera att alla fälten är ifyllda, Innehåller minst 3 tecken och kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror
* PHP version 7
* @category   Formulär
* @author     Vincent <vincentnordeman@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">

</head>

<body>


<?php

if (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"])) {
    
    $namn=$_POST["namn"];
    $adress=$_POST["adress"];
    $postnr=$_POST["postnr"];
    $postort=$_POST["postort"];
    
   /*  Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0){
        echo "<p> Fyll i namn!</p>";
    }
    if (strlen($adress) == 0){
        echo "<p> Fyll i adress!</p>";
    }
    if (ctype_digit($postnr) == 0){
        echo "<p> Fyll i postnr!</p>";
    }
    if (strlen($postort) == 0){
        echo "<p> Fyll i postort!</p>";
    }
/* Innehåller minst 3 tecken */
    if (strlen($namn) < 3){
        echo "<p> Namnet måste vara minst 3 tecken!</p>";
    }
    if (strlen($adress) < 3){
        echo "<p> Adress måste vara minst 3 tecken! </p>";
    }
    if (ctype_digit($postnr) < 3){
        echo "<p> Postnr måste vara minst 3 tecken! </p>";
    }
    if (strlen($postort) < 3){
        echo "<p> Postort måste vara minst 3 tecken!</p>";
    }

/* Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror */
    if (ctype_digit($postnr) < 5){
        echo "<p> Postnr måste vara 5 siffror! </p>";
    }
}
?>

    <form action="#" method="post">
        <label for="">Namn</label>
        <input type="text" name="namn"></input><br>
        <label for="">adress</label>
        <input type="text" name="adress"></input><br>
        <label for="">postnr</label>
        <input type="text" name="postnr"></input><br>
        <label for="">postort</label>
        <input type="text" name="postort"></input><br>
        <button>Skicka in</button></form>
</body>

</html>