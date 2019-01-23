<?php
/* Write a PHP script to get the filename component of the following path (explode). 
Sample path : "https://www.w3resource.com/index.php"
Expected Output : 'index'  */
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

    $text = "https://www.w3resource.com/index.php";
    $a = explode("com/", $text);
    print_r($a);
    
?>
</body>
</html>