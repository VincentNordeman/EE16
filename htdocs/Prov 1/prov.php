<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skatt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">

</head>

<body>
    <?php 
if (isset($_POST["namn"]) && isset($_POST["brutto"]) && isset($_POST["skatt"])) 

$namn=$_POST["namn"];
$brutto=$_POST["brutto"];
$skatt=$_POST["skatt"];

/* Räkningen för Brutto och skatt */
$netto= $brutto*(100-$skatt)/100;

/* Räknar ut och skriver ut nettolön */
if ($brutto && $skatt){
    echo "<p> $namn lön är $netto efter skatt.<br>
    Beräkning baserat på bruttolön $brutto och skattesatsen $skatt% </p>"; 
}
?>
    <p></p>
    <form action="#" method="post">
        <label for="">Namn</label>
        <input type="text" name="namn"></input><br>

        <label for="">Bruttolön</label>
        <input type="text" name="brutto"></input><br>

        <label for="">Skatt</label>
        <input type="text" name="skatt"><br>

        <button>Räkna ut</button></form>


</body>

</html>