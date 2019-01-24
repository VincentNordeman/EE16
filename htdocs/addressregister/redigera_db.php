<?php
include_once("../../admin/konfig_db.php");

session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adressregister</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    /* Logga in på databasen */
    $conn = new mysqli($hostname, $users, $passwords, $database);
    
    /* Fungerar anslutningen */
    if ($conn->connect_error)
    die("Kunde inte ansluta till databasen" . $conn->connect_error);
    else{
        /*  echo "<p>Anslutningen lyckades</p>"; */
    }
    
    /* SQL-fråga för att hämta alla data om användaren */
    $sql = "SELECT * FROM personer WHERE id = '$id'";
    $result = $conn->query($sql);
    
    /* Gick  cet bra? */
    if (!$result) {
        die("Det blev fel med sql satsen");
    } else {
        $rad = $result->fetch_assoc();
        /* $rad är en array med key:fnman, enamn, epost */
        echo $rad['fnamn'] . " " . $rad['enamn'] . " " .  $rad['gmail'] . " ";
    }
    
}
?>
    <div class="kontainer">
        <h3>Redigera</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <form action="redigera_spara_db.php" method="post">
            <input type="text" name="fnamn" value="<?php echo $rad['fnamn']?>">
            <label for="enamn">Efternamn</label>
            <input type="text" name="enamn" value="<?php echo $rad['enamn']?>">
            <label for="gmail">Gmail</label>
            <input type="text" name="gmail" value="<?php echo $rad['gmail']?>">
            <input type="hidden" name="id" value="<?php echo $rad['id']?>">
            <button>Uppdatera</button>
        </form>
    </div>
</body>

</html>