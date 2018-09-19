<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Låne kalkylator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
if (isset($_POST["rakna"]) && isset($_POST["summa"]) && isset($_POST["ranta"])) {
    
    $rakna=$_POST["rakna"];
    $summa=$_POST["summa"];
    $ranta=$_POST["ranta"];
    
    $rantab="1.0$ranta";
    
    $a1=$summa*$rantab; 
    $a2=$summa*$rantab*$rantab;
    $a3=$summa*$rantab*$rantab*$rantab;
    
    if ($rakna=="n1") {
        echo "<p>Det blir $a1</p>";   
    } elseif ($rakna=="n2"){
        echo "<p>Det blir $a2</p>";
    } elseif ($rakna=="n3") {
        echo "<p>Det blir $a3</p>";
    }
}
?>
    <p></p>
    <form action="#" method="post">
        <label for="">Summa</label>
        <input type="text" name="summa"></input><br>
        <label for="">Ränta</label>
        <input type="text" name="ranta"></input><br>
        <label for="">1 år</label>
        <input type="radio" name="rakna" value="n1"><br>
        <label for="">2 år </label>
        <input type="radio" name="rakna" value="n2"><br>
        <label for="">3 år</label>
        <input type="radio" name="rakna" value="n3"><br>
        <button>Räkna ut</button></form>
</body>

</html>