<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dagens horoskop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <?php

$url = "https://www.elle.se/kategori/horoskop/";


/* Ladda ner webbsidan  */
$sidan = file_get_contents($url);

/* Leta rätt på början */

$start =strpos($sidan, "Väduren" ); 
/* Leta rätt på slutet */
$slut = strpos($sidan, "post-pagelink" );

/* Plocka ut horoskop-koden */
$length = $slut - $start;
$horoskop = substr($sidan, $start, $length );

/* Skriv horoskopet */
echo $horoskop;


?>
</body>

</html>