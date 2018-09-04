<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cyborg.epic.css">
</head>
<body>
    <h1>Mina svåra blogg</h1>
    <nav>
    <ul>
        <li><a href="index.php">Hemsida</a></li>
        <li><a href="skriva.php">Skriv inlägg</a></li>
        <li><a href="lasa.php">Läs inlägg</a></li>
    </ul>    
    </nav>

    <form action="spara.php" method="post">
            <label for="inlagg">Inlägg</label>
            <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
            <button class="btn btn-primary">Spara inlägg</button>

    </form>
</body>
</html>