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
        <h3>Radera personer</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    /* Logga in på databasen */
    $conn = new mysqli($hostname, $users, $passwords, $database);
    
    /* Fungerar anslutningen */
    if ($conn->connect_error)
    die("Kunde inte ansluta till databasen" . $conn->connect_error);
    else{
        echo "<p>Anslutningen lyckades</p>";
    } 
    
    /* SQL satsen för att hitta raden */
    $sql ="SELECT * FROM personer WHERE id = $id";
    $result = $conn->query($sql);
    
    /* Gick det bra? */
    if (!$result) {
        die("Det blev fel med sql satsen");
    } else {
        $rad = $result->fetch_assoc();
        echo "<p>Vill du verkligen radera {$rad['fnamn']} {$rad['enamn']} från databasen <a href=\"radera_db.php?id={$rad['id']}\">Ja</a>?</p>";
    }
} else {
    echo "<p>Något gick fel. ID saknas";
}

?>
    </div>
</body>

</html>