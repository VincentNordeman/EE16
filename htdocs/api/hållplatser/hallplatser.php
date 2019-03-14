<?php
/*
* PHP version 7
* @category   Json
* @author     Vincent Nordeman
* @license    PHP CC
*/

if (isset($_POST["lat"]) && isset($_POST["lon"])) {
    $lat = filter_input(INPUT_POST,"lat", FILTER_SANITIZE_STRING);
    $lon = filter_input(INPUT_POST,"lon", FILTER_SANITIZE_STRING);
    
    /* Api Nyckel */
    $api = "5a04359da47042b7837f88a5c61908c9";
    /* Radie för hållplatser */
    $radius = 1000;
    /* Max antal hållplatser */
    $max = 50;
    $url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";
    
    /* Hämta json-data från api */
    $json = file_get_contents($url);
    
    /* Avkoda json */
    $jsonData = json_decode($json);
    
    /* Leta rätt på data vi vill ha */
    $stopLocation = $jsonData->LocationList->StopLocation;
    
    $stops = [];
    foreach ($stopLocation as $stop) {
        $name = $stop->name;
        $lat = $stop->lat;
        $lon = $stop->lon;
        $stops[] = [$name, $lat, $lon];
    }
    
    echo json_encode($stops);
} else {
    echo "Något gick fel";
}

?>