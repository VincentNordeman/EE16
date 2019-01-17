<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="kontainer">
        <?php
/* Öppna textfilen och läsa innehållet och skriv ut det */
$allaRader = file("text.txt");
echo "<table>";
echo "<tr>";
echo "<th>Förnamn";
echo "<th>Efternamn";
echo "<th>Gmail";
echo "</tr>";

foreach ($allaRader as $rad) {
    echo "<tr>";
    $delar = explode(" ", $rad);
    echo "<td>$delar[0]</td>";
    echo "<td>$delar[1]</td>";
    echo "<td>$delar[2]</td>";
    echo "</tr>";
}  
echo "</table>" 
?>
    </div>
</body>

</html>