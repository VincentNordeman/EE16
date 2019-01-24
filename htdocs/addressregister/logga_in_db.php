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

if (isset($_POST["anvandarnamn"]) && isset($_POST["losenord"])){
    $anvandarnamn = filter_input(INPUT_POST, "anvandarnamn", FILTER_SANITIZE_STRING);
    $losenord = filter_input(INPUT_POST, "losenord", FILTER_SANITIZE_STRING);
    
    /* Hämta användarens lösenord från databasen */

    /* Kontrollerar om lösenord är ok */

    if ($anvandarnamn=="vincent" && $losenord=="123") {
        $_SESSION["andv"] = "vincent";
        header("Location: ny_vara.php");
        exit;
    } 
    echo $_SESSION["andv"];
}

?>
        <p>Logga in</p>
        <form action="#" method="post">
            <label for="">Användarnamn</label>
            <input type="text" name="anvandarnamn"><br>
            <label for="">Lösenord</label>
            <input type="password" name="losenord"><br>
            <button>Logga in</button></form>
    </div>
</body>

</html>