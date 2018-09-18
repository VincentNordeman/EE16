<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
$heltal1=$_POST["heltal1"];
$heltal2=$_POST["heltal2"];

if ($heltal1 < $heltal2) {
    for ($i=$heltal1 + 1; $i < $heltal2; $i++) { 
        echo "$i "; 
    }
}
else { 
    header("Location: upg_3_3.php?fel=1"); 
}



?>
</body>

</html>