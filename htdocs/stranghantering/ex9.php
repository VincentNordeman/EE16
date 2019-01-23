<?php
/*  Write a PHP script to generate simple random password [do not use rand() function] from a given string.
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Note : Password length may be 6, 7, 8 etc.    */
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

    function losen($a) 
{
  $text = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($text), 0, $a);
}
  echo losen(6)."\n";
    
?>
</body>
</html>