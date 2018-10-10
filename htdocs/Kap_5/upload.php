<?php
/* Kolla att man har klickat på knappen "Submit" */
if (isset($_POST["submit"])) {
    $fil = $_FILES["fil"];
    print_r($fil);
    
    /* Plocka ut filnamnet */
    $filNamn = $fil["name"];
    echo "<p>Filens namn är $filNamn </p>";
    
    /* Filtyp */
    $filTyp = $fil["type"];
    echo "<p>Filens typ är $filTyp </p>";
    
    /* Temporära namn */
    $fileTempName = $fil["tmp_name"];
    echo "<p>Filens temporära namn är $fileTempName </p>";
    
    /* Storlek på filen */
    $filStorlek = $fil["size"];
    echo "<p>Filens storlek är $filStorlek </p>";
    
    /* Error meddelande */
    $filError = $fil["error"];
    echo "<p>Filens felmeddelande är $filError </p>";
    
    /* Filens ändelse */
    $filExt = explode ("image/" , $filTyp);
    echo "<p>Filens filändelse är $filExt[1]</p>";
    
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
        echo "<p>Tillåten filtyp</p>";
        
        /* Meddelande om det blir fel */
        if ($filError == 0) {
            
            /* Ny unikt filnamn för att inte skriva över filer med samma namn */
            $filNyttNamn = uniqid("", true). ".". $filExt[1];
            
            /* Hela sökvägen till den nya filen */
            $filDestination = "./bilder/filNyttNamn";
            echo "<p>$filDestination</p>";
            move_uploaded_file($fileTempName, $filDestination);
            echo "<p>Filen uppladdad</p>";
            
            /* Hoppa till formulärat */
            header("Location:filuppladdning.php?success");
            
        } else {
            echo "<p>Något gick fel: $errorMeddelanden[$filError]</p>";
        }
    } else {
        echo "<p>Inte tillåten fil</p>";
    }
}
?>