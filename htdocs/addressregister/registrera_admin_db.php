<?php
include_once("../../admin/konfig_db.php");

session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Addresregister</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h3>Inloggning</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
<?php 

if (isset($_POST["anamn"]) && isset($_POST["losen"])){
    $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
    $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);
    
    /* Logga in på databasen */
    $conn = new mysqli($hostname, $users, $passwords, $database);
    
    /* Fungerar anslutningen */
    if ($conn->connect_error)
    die("Kunde inte ansluta till databasen" . $conn->connect_error);
    else{
        /* echo "<p>Anslutningen lyckades</p>"; */
    } 

    $hash = password_hash($losen, PASSWORD_DEFAULT);

     /* Sql fråga */
     $sql = "INSERT INTO admin (anamn, hash) VALUES ('$anamn', '$hash')";
     $result = $conn->query($sql);

    /* Gick  det bra? */
    if (!$result) {
        die("Det blev fel med sql satsen");
    } else {
       echo "<p>Admin registrerad</p>";
    }
    
    /* Stänger ned anslutningen  */
    $conn->close();
    
}
?>
        <form action="#" method="post">
            <label for="">Användarnamn</label>
            <input type="text" name="anamn">
            <label for="">Lösenord</label>
            <input type="password" name="losen">
            <button>Registrera</button></form>
    </div>
</body>

</html>