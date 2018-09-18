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
if (isset($_POST["heltal1"]) && isset($_POST["heltal2"])) {
    
    $heltal1=$_POST["heltal1"];
    $heltal2=$_POST["heltal2"];
    
    
    if ($heltal1 < $heltal2) {
        for ($i=$heltal1 + 1; $i < $heltal2; $i++) { 
            echo "$i "; 
        }
    } else {
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