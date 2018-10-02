<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens datum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
/* Alla dagar i veckan */
$dagar[1] = "Måndag";
$dagar[2] = "Tisdag";
$dagar[3] = "Onsdag";
$dagar[4] = "Torsdag";
$dagar[5] = "Fredag";
$dagar[6] = "Lördag";
$dagar[7] = "Söndag";

$monader[1] = "Januari";
$monader[2] = "Februari";
$monader[3] = "Mars";
$monader[4] = "April";
$monader[5] = "Maj";
$monader[6] = "Juni";
$monader[7] = "Juli";
$monader[8] = "Augusti";
$monader[9] = "September";
$monader[10] = "Oktober";
$monader[11] = "November";
$monader[12] = "December";

    /* Dagens Nr */
    $dagNr = date ("N"); 
    echo $dagar[$dagNr - 1]; 

    /* Månadens Nr */
    $monNr = date ("n");
    echo $monader[$monNr - 1];

    $ar = date("Y"); 

    echo "<p>$dagar[$dagNr] $monader[$monNr] $ar</p>";



    ?>
</body>
</html>