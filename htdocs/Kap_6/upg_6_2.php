<?php
/*
* Bygg på formuläret så att användaren också ska fylla i en e-postadress.
Kontrollera sedan att e-postadressen innehåller ett @, och minst en punkt.
Kontrollera också att e-postadressen är minst sex tecken lång.

* PHP version 7
* @category   Formulär
* @author     Vincent <vincentnordeman@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">

</head>
<body>


    <?php
$fel = 0;
if (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"]) && isset($_POST["gmail"])) {
    
    $namn=$_POST["namn"];
    $adress=$_POST["adress"];
    $postnr=$_POST["postnr"];
    $postort=$_POST["postort"];
    $gmail=$_POST["gmail"];
    $fel = 0; 
    
    /*  Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0){
        echo "<p> Fyll i namn!</p>";
        $fel++;
    }
    if (strlen($adress) == 0){
        echo "<p> Fyll i adress!</p>";
        $fel++;
    }
    if (ctype_digit($postnr) == 0){
        echo "<p> Fyll i postnr!</p>";
        $fel++;
    }
    if (strlen($postort) == 0){
        echo "<p> Fyll i postort!</p>";
        $fel++;
    }
    if (strlen($gmail) == 0){
        echo "<p> Fyll i gmail</p>";
        $fel++;
    }
    
    /* Innehåller minst 3 tecken */
    if (strlen($namn) < 3){
        echo "<p> Namnet måste vara minst 3 tecken!</p>";
        $fel++;
    }
    if (strlen($adress) < 3){
        echo "<p> Adress måste vara minst 3 tecken! </p>";
        $fel++;
    }
    if (ctype_digit($postnr) < 3){
        echo "<p> Postnr måste vara minst 3 tecken! </p>";
        $fel++;
    }
    if (strlen($postort) < 3){
        echo "<p> Postort måste vara minst 3 tecken!</p>";
        $fel++;
    }
    
    /* Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror */
    if (ctype_digit($postnr) < 5){
        echo "<p> Postnr måste vara 5 siffror! </p>";
        $fel++;
    }
    
    /* Kontrollera sedan att e-postadressen innehåller ett @, och minst en punkt.*/
    if (!strpos($gmail, "@")){
        echo "<p> Gmail måste innehålla @!";
        $fel++;
    }
    
    if (!strpos($gmail, ".")){
        echo "<p> Gmail måste innehålla en punkt(.)!";
        $fel++;
    }
    
    /*   Kontrollera också att e-postadressen är minst sex tecken lång */
    if (strlen($gmail) < 6){
        echo "<p> Gmail måste ha minst 6 tecken!</p>";
        $fel++;
    }
}
    if ($fel == 0) {
        ?>
    <form action="#" method="post">
        <label for="">Namn</label>
        <input type="text" name="namn"><br>
        <label for="">Adress</label>
        <input type="text" name="adress"><br>
        <label for="">Postnr</label>
        <input type="text" name="postnr"><br>
        <label for="">Postort</label>
        <input type="text" name="postort"><br>
        <label for="">Gmail</label>
        <input type="text" name="gmail"><br>
        <button>Skicka in</button>
    </form>
    <?php
    } else {
        ?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn" value="<?php echo $namn ?>"><br>
        <label for="">Adress</label><input type="text" name="adress" value="<?php echo $adress ?>"><br>
        <label for="">Postnr</label><input type="text" name="postnr" value="<?php echo $postnr ?>"><br>
        <label for="">Postort</label><input type="text" name="postort" value="<?php echo $postort ?>"><br>
        <label for="">Gmail</label><input type="text" name="gmail" value="<?php echo $gmail ?>"><br>
        <button>Skicka in</button>
    </form>
    <?php
    }

?>
</body>

</html>