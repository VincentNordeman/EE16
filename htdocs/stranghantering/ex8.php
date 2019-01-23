<?php
/*  Write a PHP script to format values in currency style.
Sample values : value1 = 65.45, value2 = 104.35
Expected Result : 169.80   */
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

    $value = 65.45;
    $value2 = 104.35;
    $a = sprintf("%01.2f" ,$value + $value2);
    echo "<p>$a</p>";
    
?>
</body>
</html>