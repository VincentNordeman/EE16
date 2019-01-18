<?php
include_once("../../admin/konfig_db.php");
?>

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

/* Logga in på databasen */
$conn = new mysqli($hostname, $users, $passwords, $database);

/* Fungerar anslutningen */
if ($conn->connect_error)
die("Kunde inte ansluta till databasen" . $conn->connect_error);
else{
    echo "<p>Anslutningen lyckades</p>";
} 

/* Skapa sql frågan */
$sql = "SELECT * FROM personer";
$result = $conn->query($sql);

/* Gick det bra? */
if (!$result) {
    die("Det blev fel med sql satsen");
} else {
    echo "<p>Du har registrerat en person</p>";
}

echo "<table>";
echo "<tr>";
echo "<th>Förnamn";
echo "<th>Efternamn";
echo "<th>Gmail";
echo "</tr>";

/* Skriv ut resultatet rad för rad */
while($rad = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>{$rad['fnamn']}</td>";
    echo "<td>{$rad['enamn']}</td>";
    echo "<td>{$rad['gmail']}</td>";
    echo "</tr>";
    
}
echo "</table>";

$conn->close();
?>
    </div>
</body>
</html>