<?php
include_once("../../admin/konfig_db.php");

session_start();
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
    <div class="kontainer">
        <h3>Lista alla personer</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <?php

/* Logga in på databasen */
$conn = new mysqli($hostname, $users, $passwords, $database);

/* Fungerar anslutningen */
if ($conn->connect_error)
die("Kunde inte ansluta till databasen" . $conn->connect_error);
else{
   /*  echo "<p>Anslutningen lyckades</p>"; */
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
    
    /* Skapa knapp för att radera raden */
    echo "<td><a href=\"radera_verifera_db.php?id={$rad['id']}\">Radera</a></td>";
    /* Skapa knapp för att redigera raden */
    echo "<td><a href=\"redigera_db.php?id={$rad['id']}\">Redigera</a></td>";
    
}
echo "</table>";

$conn->close();
?>
    </div>
</body>

</html>