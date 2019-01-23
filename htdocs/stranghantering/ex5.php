<?php
/*  Write a PHP script to extract the file name from the following string. 
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'  */
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

    $text = "www.example.com/public_html/index.php";
    $a = substr($text, -9);
    echo "<p>$a</p>";

?>
</body>
</html>