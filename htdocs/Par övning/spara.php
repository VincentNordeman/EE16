<?php
if (isset($_POST["coordinates"]) && isset($_POST["beskrivning"])) {
    $coordinates = filter_input(INPUT_POST, 'coordinates' , FILTER_SANITIZE_STRING); 
    $beskrivning = filter_input(INPUT_POST, 'beskrivning' , FILTER_SANITIZE_STRING); 

    $handtag = fopen ("platser.txt", "a");
    fwrite($handtag, "<p>" . $coordinates . $beskrivning . "</p>\n");
    
    fclose($handtag);
    echo "SPARAD";
}else {    
    echo "Inte sparad";
}
?>