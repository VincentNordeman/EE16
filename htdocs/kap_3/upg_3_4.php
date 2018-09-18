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
if (isset($_POST["tal1"])) {
    
    $tal1=$_POST["tal1"];
    
    for ($i=1; $i <= $tal1; $i++) { 
        if ($i*$i > 50){
            echo $i . " " . $i*$i; 
        }
    }
}


?>
    <p>Sätt in 2 olika Heltal</p>
    <form action="#" method="post">
        <label for="">tal 1</label>
        <input type="text" name="tal1"><br>
        <button>Testa</button></form>
</body>

</html>