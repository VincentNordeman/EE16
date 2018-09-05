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
        $namn = $_POST["namn"];
        $gmail = $_POST["gmail"];
       
        echo "Hej " . $namn . " vi kommer kontakta dig via " . $gmail . "<br>";
        echo "Tack så mycket!"

    ?>
</body>
</html>