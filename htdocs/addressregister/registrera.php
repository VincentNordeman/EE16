<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
if (isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["gmail"])){
    
    $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
    $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
    $gmail = filter_input(INPUT_POST, "gmail", FILTER_SANITIZE_STRING);
    /* Öppna en text fil */
    $handtag = fopen ("text.txt", 'a');
    fwrite($handtag, "$fnamn $enamn $gmail" . PHP_EOL);
    fclose($handtag);
    
} 
?>
    <div id="kontainer">
        <form action="#" method="post">
            <label for="fnamn">Förnamn</label>
            <input type="text" name="fnamn" id="fnamn">
            <label for="enamn">Efternamn</label>
            <input type="text" name="enamn" id="enamn">
            <label for="gmail">Gmail</label>
            <input type="text" name="gmail" id="gmail">
            <button>Registrera</button>
        </form>
    </div>
</body>

</html>