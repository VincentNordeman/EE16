<?php
/*  Write a PHP script to get the last three characters of a string.
Sample String : 'rayy@example.com'
Expected Output : 'com'   */
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
    $a = strstr($text,"com", false);
    echo "<p>$a</p>";

?>
</body>
</html>