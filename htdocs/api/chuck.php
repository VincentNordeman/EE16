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
    <title>Chuck Norris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="chuck.css">

</head>

<body>
    <?php
 $json = file_get_contents("http://api.chucknorris.io/jokes/random");
 
/* Avkoda Json */
 $jsonData = json_decode($json);
/* Plocka ut skämt-delen. */
 $joke = $jsonData->value;

 echo "<p>$joke</p>";
?>

</body>

</html>