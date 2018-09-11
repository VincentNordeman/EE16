< !DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inloggning</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php $anvandarnamn=$_POST["anvandarnamn"];
$losenord=$_POST["losenord"];

if ($anvandarnamn=="vincent"&& $losenord=="123") {
    echo "<p>$anvandarnamn, du är inloggad!</p>";
}

else {
    header("Location: upg_3_2.php");
    die();
}



?>
    </body>

    </html>