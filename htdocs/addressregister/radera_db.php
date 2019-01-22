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
    <?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    echo "<p>$id</p>";
    
    /* Logga in på databasen */
    $conn = new mysqli($hostname, $users, $passwords, $database);
    
    /* Fungerar anslutningen */
    if ($conn->connect_error)
    die("Kunde inte ansluta till databasen" . $conn->connect_error);
    else{
        /* echo "<p>Anslutningen lyckades</p>"; */
    } 
    
    /* SQL satsen för att redera en rad */
    $sql ="DELETE FROM personer WHERE id = $id";
    $result = $conn->query($sql);
    
    /* Gick det bra? */
    if (!$result) {
        die("Det blev fel med sql satsen");
    } else {
        echo "<p>Personen med id=$id har rederats</p>";
    }
    
} else {
    echo "<p>Något gick fel. ID saknas";
}

?>

</body>

</html>