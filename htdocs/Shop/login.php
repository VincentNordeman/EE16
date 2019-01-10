<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Shoppen</h1>
        <nav>
            <?php
if (!isset($_SESSION["andv"])){
    echo  "<a href=\"./login.php\">Logga in</a>";
} else {
    echo "<a href=\"./logout.php\">Logga ut</a>";
}
?>
            <a href="./ny_vara.php">Ny vara</a>
            <a href="./lista_vara.php">Handla</a>
        </nav>
        <h2>Alla varor</h2>
    </header>
    <?php 

if (isset($_POST["anvandarnamn"]) && isset($_POST["losenord"])){
    $anvandarnamn = filter_input(INPUT_POST, "anvandarnamn", FILTER_SANITIZE_STRING);
    $losenord = filter_input(INPUT_POST, "losenord", FILTER_SANITIZE_STRING);
    
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

    <footer>
        Vincent Nordeman
    </footer>
</body>

</html>