<?php
/*
Write a PHP script that inserts a new item in an array in any position. 
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5
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

        $a = ['1','2','3','4','5'];
        $b = ['b'];
        array_splice($a, 3, 0, $b);
        foreach ($a as $key => $value) {
            echo "<p>$value</p>";
        }
        
        ?>
</body>

</html>