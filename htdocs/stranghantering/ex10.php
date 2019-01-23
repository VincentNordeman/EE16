<?php
/*  Write a PHP script to replace the first 'The' of the following string with 'That' (str_replace). 
Sample date : 'The quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dogx. */
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

    $text = "The quick brown fox jumps over the lazy dog.";
    $a = str_replace("The", "That", $text);
    echo "<p>$a</p>";
    
?>
</body>
</html>