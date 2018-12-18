<?php
if (isset($_POST["Koordinater"]) && isset($_POST["beskrivning"])) {
    $Koordinater = filter_input(INPUT_POST, 'Koordinater' , FILTER_SANITIZE_STRING); 
    $beskrivning = filter_input(INPUT_POST, 'beskrivning' , FILTER_SANITIZE_STRING); 

    $handtag = fopen ("platser.txt", "a");
    fwrite($handtag, "<p>" . $Koordinater . $beskrivning . "</p>\n");
    
    fclose($handtag);
    echo "SPARAD";
}else {    
    echo "Inte sparad";
}
?>