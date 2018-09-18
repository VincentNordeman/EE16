<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heltal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
if (isset($_GET["fel"])) {
    $fel = $_GET["fel"];
    if ($fel == 1) {
        echo "<p>FEL! Tal 1 måste vara mindre en tal 2.</p>";
    }
}

?>
    <p>Sätt in 2 olika Heltal</p>
    <form action="#" method="post">
        <label for="">heltal 1</label>
        <input type="text" name="heltal1"><br>
        <label for="">Heltal 2</label>
        <input type="text" name="heltal2"><br>
        <button>Testa</button></form>
</body>

</html>