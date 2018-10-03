<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link rel="stylesheet" href="bildgalleri.css">
</head>
<body> 
    <?php

    $sokvag = "./bilder";
    $filer = scandir($sokvag);

    echo "<div class=\"container\">\n";
    echo "<h1>Bild galleri</h1>\n";

    echo "<h3>Skriv ut alla filer som hittats</h3>";
    foreach ($filer as $fil) {
        if ($fil != "." && $fil != "..") {
            echo "<p>$fil</p>";
            echo "<div class=\"ros\">\n";
            echo "<img class=\"ram vanster\" src=\"./bilder/sam-ekpil-522518-unsplash.jpg\" alt=\"Vinter  (Hundar)\">\n";
            echo "<p><strong>Polarsken</strong> (Hundar?), Norrsken med hundar</p>";
            echo "<hr>";
        echo "</div>";
        }
    }
    echo "</div>\n";
    ?>
</body>
</html>