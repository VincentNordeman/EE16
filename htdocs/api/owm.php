<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hämta väder</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php

$api = "22ee1d58f7adae08ee71fa7c0bd24481";
$json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Tokyo&APPID=$api&units=metric");

print_r($json);

/* Avkoda Json */
$jsonData = json_decode($json);

/* Plock ut kordinater */
$coord = $jsonData->coord;
$lat = $coord->lat;
$lon = $coord->lon;

/* Plocka ut temp */
$temp= $jsonData->main->temp;

/* Väderikon */
$icon = $jsonData->weather[0]->icon . ".png";
print_r("$icon");

echo "<p>Tokyo ligger på lattiud $lat och longitut $lon<p>";
echo "<p>Temp i Tokyo $temp&deg; C.<p>";
echo "<img src=\"https://openweathermap.org/img/w/$icon\" alt=\"väderbild\">";

?>
</body>

</html>