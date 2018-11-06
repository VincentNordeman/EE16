<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Session</h1>
    <ul>
        <li><a href="session.php"></a>Home</li>
        <li><a href="contact.php"></a>Contact</li>
    </ul>

    <?php

$_SESSION["andv"] = "Vincent"; 
echo $_SESSION["andv"];


?>
</body>

</html>