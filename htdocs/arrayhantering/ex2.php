<?php
/*
Write a PHP script which will display the colors in the following way: 
$color = array('white', 'green', 'red') 
Output : 
white, green, red,
green
red
white 
*/
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

$color = array('white', 'green', 'red');

echo "<p>$color[0], $color[1], $color[2],<br> $color[1]<br> $color[2]<br>$color[0]</p>";

/* foreach ($color as $value) {
    echo "<p>The color is $value <br> </p>";
} */



?>
</body>

</html>