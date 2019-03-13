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
    <title>Itunes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">

</head>

<body>
    <?php
if (isset($_POST["art"])) {
    $art = filter_input(INPUT_POST,"art", FILTER_SANITIZE_STRING);
    
    $json = file_get_contents("https://itunes.apple.com/search?term=$art&entity=song&limit=25");
    
    /* Avkoda Json */
    $jsonData = json_decode($json);
    
    echo "<table>";
    echo "<tr> 
    <td>Låtar</td>
    </tr>";
    $count = $jsonData->resultCount;
    for ($i=0; $i < $count; $i++) { 
        $results = $jsonData->results[$i];
        $trackName = $results->trackName;
        
        echo "<tr>";
        echo "<td> $trackName </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No working</p>";
}



?>
    <div>
        <form action="#" method="post">
            <label for="art"></label>
            <input type="text" name="art" value="">
            <button>Sök</button>
        </form>
    </div>

</body>

</html>