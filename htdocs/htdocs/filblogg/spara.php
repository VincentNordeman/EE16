<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
</head>
<body>

<h1>Mina svåra blogg</h1>
    <nav>
    <ul>
        <li><a href="index.php">Hemsida</a></li>
        <li><a href="skriva.php">Skriv inlägg</a></li>
        <li><a href="lasa.php">Läs inlägg</a></li>
    </ul>    
    </nav>
    
<?php
/* Ta emot text från formuläret och spara ned i en textfil.*/

$texten =  $_POST["inlagg"];

$handtag = fopen ("inlaggen.txt", 'a');
fwrite($handtag, $texten) .  "\n");

echo "<p>";
echo "inlägget har sparats!";
echo "<p>";

fclose($handtag);
?>

</body>
</html>



