<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Gör ett formulär där användaren ska fylla i namn, adress, postnr och postort.

Kontrollera att alla fälten är ifyllda, och innehåller minst 3 tecken.
Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror.
-->

    <?php

if (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"])) {

    $namn=$_POST["namn"];
    $adress=$_POST["adress"];
    $postnr=$_POST["postnr"];
    $postort=$_POST["postort"];

    if (strlen($namn) == 0){
        echo "<p> Fyll i namn!</p>"
    }
    if (strlen($adress) == 0){
        echo "<p> Fyll i adress!</p>"
    }
    if (strlen($postnr) == 0){
        echo "<p> Fyll i postort!</p>"
    }
    if (strlen($postort) == 0){
        echo "<p> Fyll i postort!</p>"
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