<?php
/* Write a PHP script to extract the user name from the following email ID. 
Sample String : 'rayy@example.com'
Expected Output : 'rayy'   */
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

    $text = "rayy@example.com";
    $a = strstr($text,"@", true);
    echo "<p>$a</p>";

?>
</body>
</html>