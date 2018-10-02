<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $sokvag = "C:\Users\larsvincent.nordema\Pictures\Screenshots";

    $filer = scandir($sokvag);

    echo "<h3>Skriv ut alla filer som hittats</h3>";
    foreach ($filer as $fil) {
        if ($fil != "." && $fil != "..") {
            
            echo "<p>$fil</p>";
        }
    }

    ?>
</body>
</html>