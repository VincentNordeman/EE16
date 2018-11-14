<?php
/*
* PHP version 7
* @category   Mail
* @author     Vincent Nordeman vincentnordeman@gmail.com
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skicka mail</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <header>
            <h1>Skicka mail</h1>
        </header>
        <?php

$adressat = filter_input(INPUT_POST, "adressat", FILTER_SANITIZE_EMAIL);
$rubrik = filter_input(INPUT_POST,"rubrik", FILTER_SANITIZE_STRING);
$meddelande = filter_input(INPUT_POST,"meddelande", FILTER_SANITIZE_STRING);

if ($adressat && $rubrik && $meddelande) {
    echo "<p>Mail skickat till $adressat</p>";
    echo "<p>Rubriken är $rubrik</p>";
    echo "<p>Meddelandet är $meddelande </p>";
} else {
    echo "<p>Fyll i alla fält!</p>";
}

?>
        <form action="#" method="post">
            <label for="adressat">Mail </label>
            <input type="text" id="adressat" name="adressat">

            <label for="rubrik">Rubrik</label>
            <input type="text" id="rubrik" name="rubrik">

            <label for="meddelande">Meddelande</label>
            <textarea id="meddelande" name="meddelande"></textarea><br>
            <button type="submit">Skicka mail</button>
        </form>
        <div>
</body>

</html>