<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatt</title>
    <link rel="stylesheet" href="chatt.css">
</head>

<body>
    <?php
$namn = "";
if (isset($_POST["namn"]) && isset($_POST["meddelande"])) {
    $namn = filter_input(INPUT_POST,"namn", FILTER_SANITIZE_STRING); 
    $meddelande = filter_input(INPUT_POST,"meddelande", FILTER_SANITIZE_STRING); 
    /* Skriv ner meddelandet i en textfil, format: klocka:  */
    
    $klocka = date("h:i");
    
    $handtag = fopen ("chatt.txt", "a+");
    fwrite($handtag, "$klocka $namn: $meddelande" . PHP_EOL);
    fclose($handtag);
}
?>
    <div class="kontainer">
        <h1>
            <?php
echo $_SERVER["SERVER_NAME"] . " " .  $_SERVER["SERVER_ADDR"]; 
?>
        </h1>
        <form action="#" method="post">
            <label>Namn</label>
            <input type="text" name="namn" id="namn" 
            value="<?php echo $namn; ?>">
            <textarea id="chatt" cols="30" rows="10" readonly></textarea>
            <input type="text" name="meddelande" id="meddelande" placeholder="Ditt meddelande...">
            <button>Skicka</button>
        </form>
    </div>


    <script src="chatt.js"></script>
</body>

</html>