<?php
/*  Write a PHP script to put a string in an array (explode). 
Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." }  */
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

    $text = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $a = explode("\n", $text);
    print_r($a);
    
?>
</body>
</html>