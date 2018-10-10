<?php
/*
* Ladda upp filer. 
* PHP version 7
* @category   Filuppladdning
* @author     Vincent Nordeman
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filuppladdning</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
</head>

<body>
<?php
/* Kolla att man har klickat på knappen "Submit" */
if (isset($_POST["submit"])) {
    /* Ta emot data */
    $fil = $_FILES["fil"];
    $beskrivning = $_POST["beskrivning"];
    $pris = $_POST["pris"];
    
    /* Ladda upp bilden */    

    /* Plocka ut filnamnet */
    $filNamn = $fil["name"];
    
    /* Filtyp */
    $filTyp = $fil["type"];    
    /* Temporära namn */
    $fileTempName = $fil["tmp_name"];
    
    /* Storlek på filen */
    $filStorlek = $fil["size"];
    
    /* Error meddelande */
    $filError = $fil["error"];
    
    /* Filens ändelse */
    $filExt = explode ("image/" , $filTyp);
    
    /* Tillåtna filtyper */
    $tillåtnaTyper = ["jpeg" , "png" , "gif" , "pdf"];
    
    /* Felmeddelanden */
    $errorMeddelanden = array (
        0 => 'There is no error, the file uploaded with success.',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.'
    );
    
    /* Är filen tillåten att ladda upp */
    if (in_array($filExt[1], $tillåtnaTyper)) {
        
        /* Meddelande om det blir fel */
        if ($filError == 0) {
            
            /* Ny unikt filnamn för att inte skriva över filer med samma namn */
            $filNyttNamn = uniqid("", true). ".". $filExt[1];
            
            /* Hela sökvägen till den nya filen */
            $filDestination = "./varor/$filNyttNamn";
            move_uploaded_file($fileTempName, $filDestination);
            echo "<p>Uppladdningen lyckades</p>";
            
            /* Hoppa till formulärat */
            
        } else {
            echo "<p>Något gick fel: $errorMeddelanden[$filError]</p>";
        }
    } else {
        echo "<p>Inte tillåten fil</p>";
    }
    /* Uppladdning klart */

    /* SPara texten: beskrivning, pris och bildens nya namn */
    $handtag = fopen("beskrivning.txt", "a");
    fwrite($handtag, $beskrivning . $pris . $filNyttNamn);
    fclose($handtag);
}
?>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label>Beskrivning</label><input type="text" name="beskrivning"><br>
        <label for="">Pris</label><input type="text" name="pris"><br>
        <input type="file" name="fil">
        <button type="submit" name="submit">Ladda upp</button>
    </form>
</body>
</html>