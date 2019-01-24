<?php
/*
Write a PHP script to sort the following associative array : 
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key

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

$a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($a);
foreach ($a as $key => $value) {
    echo "<p>$key is $value</p>"; 
}

ksort($a);
echo "<br>";
foreach ($a as $key => $value) {
    echo "<p>$key is $value</p>";
}

arsort($a);
echo "<br>";
foreach ($a as $key => $value) {
    echo "<p>$key is $value</p>";
}

krsort($a);
echo "<br>";
foreach ($a as $key => $value) {
    echo "<p>$key is $value</p>";
}



?>
</body>

</html>