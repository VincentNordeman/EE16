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
    <?php
if (isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["gmail"])){
    
    $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
    $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
    $gmail = filter_input(INPUT_POST, "gmail", FILTER_SANITIZE_STRING);
    
    /* Logga in på databasen */
    $conn = new mysqli($hostname, $users, $passwords, $database);
    
    /* Fungerar anslutningen */
    if ($conn->connect_error)
    die("Kunde inte ansluta till databasen" . $conn->connect_error);
    else{
       /*  echo "<p>Anslutningen lyckades</p>"; */
    }
    
    /* Lagra data i tabellen */
    $sql = "INSERT INTO personer (fnamn, enamn, gmail) VALUES ('$fnamn', '$enamn', '$gmail');";
    $result = $conn->query($sql);
    
    /* Gick  cet bra? */
    if (!$result) {
        die("Det blev fel med sql satsen");
    } else {
        echo "<p>Du har registrerat en person</p>";
    }
    
    /* Stänger ned anslutningen  */
    $conn->close();
}
?>
    <div id="kontainer">
        <h3>Registrera</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <form action="#" method="post">
            <input type="text" name="fnamn" id="fnamn">
            <label for="enamn">Efternamn</label>
            <input type="text" name="enamn" id="enamn">
            <label for="gmail">Gmail</label>
            <input type="text" name="gmail" id="gmail">
            <button>Registrera</button>
        </form>
    </div>
</body>

</html>