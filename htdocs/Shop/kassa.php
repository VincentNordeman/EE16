<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kassan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer kassa">
        <header>
            <h1>Kassan</h1>
        </header>
        <main>
            <?php
/* Ta emot data */
$antalVaror = filter_input(INPUT_POST,"antalVaror", FILTER_SANITIZE_NUMBER_INT);
$total = filter_input(INPUT_POST,"total", FILTER_SANITIZE_NUMBER_INT);
$korgen = filter_input(INPUT_POST,"korgen", FILTER_SANITIZE_STRING);

if ($antalVaror && $total && $korgen){
    
    $varor = json_decode($korgen);
    echo "<table>";
    echo "<tr>
    <th>Beskrivning</th>
    <th>Styckpris</th>
    <th>Antal</th>
    <th>Summa</th>
    </tr>";
    foreach ($varor as $vara){
        echo "<tr>";
        echo "<td>$vara->beskrivning</td>";
        echo "<td>$vara->pris</td>";
        echo "<td>$vara->antal</td>";
        echo "<td>$vara->summa kr</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<div class=\"total\">";
    echo "<p>Antal varor: $antalVaror</p>";
    echo "<p>Totalt: $total</p>";
    echo "</div>";
}
?>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>