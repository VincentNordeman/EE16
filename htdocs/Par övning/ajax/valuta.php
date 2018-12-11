<?php
/*
* PHP version 7
* @category   Valuta
* @author     Vincent Nordeman<vincentnordeman@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valutaomvandlare</title>
    <link rel="stylesheet" href="valuta.css">
</head>

<body>
    <div class="kontainer">
        <h1>Valutaomvandlare</h1>
        <h2>Från Dollar (US) till ...</h2>

        <form action="">
            <label for="belopp">Belopp</label>
            <input id="belopp" type="text">
            <label for="valuta">Valuta</label>
            <select id="valuta">
                <option>Välj Valuta</option>
                <option value="SEK">Krona</option>
                <option value="PHP">Peso</option>
                <option value="CZK">Koruna</option>
                <option value="GBP">Pund</option>
                <option value="RUB">Rubel</option>
                <option value="PLN">Złoty</option>
                <option value="PYG">Guarani</option>
                <option value="NOK">Krone</option>
                <option value="MDL">Leu</option>
                <option value="CHF">Franc</option>
                <option value="HRK">Kuna</option>
            </select>
            <label for="resultat">Nytt belopp</label>
            <input id="resultat" type="text">
        </form>
    </div>
    <script src="valuta.js"></script>
</body>

</html>