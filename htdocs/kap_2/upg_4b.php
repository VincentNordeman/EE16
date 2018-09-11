<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
/* Ta emot data från förmuläret */
$temp = $_POST["temp"];
$omvandla = $_POST["omvandla"];

/* Beroende på vilken knapp vi tryckt så räknas det om */
if ($omvandla == "f2c") {
    $celsius = ($temp - 32) * 5 / 9;
    echo "<p>Tempraturen är $celsius i Celsius.</p>"; 
} 
else {
    $farenheit = 9 / 5 * $temp + 32;
    echo "<p>Tempraturen är $farenheit i farenheit.</p>";
}

?>
</body>

</html>