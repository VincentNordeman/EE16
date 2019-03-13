<?php
/*
* PHP version 7
* @category   Json
* @author     Vincent Nordeman
* @license    PHP CC
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hållplatser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="hallplatser.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />

</head>

<body>

    <div class="form">
        <form action="#" method="post">
            <label>Ange latitude</label><input type="text" name="lat" value="">
            <label>Ange longitude</label><input type="text" name="lon" value="">
            <button>Sök</button>
        </form>
    </div>


    <?php

if (isset($_POST["lat"]) && isset($_POST["lon"])) {
    $lat = filter_input(INPUT_POST,"lat", FILTER_SANITIZE_STRING);
    $lon = filter_input(INPUT_POST,"lon", FILTER_SANITIZE_STRING);
    
    /* Api Nyckel */
    $api = "5a04359da47042b7837f88a5c61908c9";
    /* Radie för hållplatser */
    $radius = 500;
    /* Max antal hållplatser */
    $max = 50;
    $url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";
    
    /* Hämta json-data från api */
    $json = file_get_contents($url);
    
    /* Avkoda json */
    $jsonData = json_decode($json);
    
    /* Leta rätt på data vi vill ha */
    $stopLocation = $jsonData->LocationList->StopLocation;
    
    foreach ($stopLocation as $stop) {
        $name = $stop->name;
        $lat = $stop->lat;
        $lon = $stop->lon;
        echo "<p>$name: $lat, $lon</p>";
    }
    
    
    echo "<table><tr><th>Alla hållplatser</th></tr></table>";
    
    
} else {
    echo "<p>Något gick fel</p>";
}



?>

    <script src="hallplatser.js"></script>
</body>

</html>