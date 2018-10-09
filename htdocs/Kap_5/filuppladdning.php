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
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
if (isset($_GET["success"])) {
    echo "<script>alert('Uppladdning lyckades')</script>";
}
?>
    <form action="uppladdning.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fil">
        <button type="submit" name="submit">Ladda upp</button>
    </form>
</body>

</html>