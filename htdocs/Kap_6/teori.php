<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stränghantering</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$address = " Crafords väg 12  ";
$trimAddress = trim($address); 
echo ".$address.$trimAddress.";

$namn = "Vincent"; 
$stortnamn = strtolower($namn);
echo "$namn $stortnamn";

echo "<p>Längd = " . strlen($namn) . "</p>";

$hello = " hej på dig"; 
echo "<p>Hej: " . substr($hello, 3). "</p>";
echo "<p>på:" . substr($hello, 4, 2). "</p>";
echo "<p>dig: " . substr($hello, 7, 3). "</p>";



}

?>    
</body>
</html>