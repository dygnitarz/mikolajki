<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mikołajki</title>
    <link rel="icon" type="image/x-icon" href="https://icons8.com/icon/Xt5q8KnCd00x/christmas-tree">
    <link href="./styl.css" type="text/css" rel="stylesheet">
    </head>
<body>
    <header>
        <h2>HEJ KOCHANIE!</h2>
    </header>
<section id="glowny">
    <form action="index2.php">
        <label for="name" >Imię:</label><br>
        <input type="text" id="name" name="name" value="Wiktoria"><br><br>

        <label for="name">Nazwisko:</label><br>
        <input type="text" id="name" name="name" value="Bańkowska" ><br><br>

                            Czy zostaniesz moją mikołajową?<br>
        <label for="check">Tak</label>
        <input type="checkbox" id="check" name="check" value="Tak" checked><br>
        <label for="check2">Tak</label>

        <input type="checkbox" id="check2" name="check2" value="Tak" checked><br>

        <label for="check3">Nie</label>
        <input type="checkbox" id="check3" name="check3" value="Nie" disabled><br><br>
        Czy wiesz że cię kocham?<br>
        <label for="check">Tak</label>
        <input type="checkbox" id="check" name="check" value="Tak" checked><br><br>
        
        <a href="index2.php"><button class="button-8" role="button">Oddaj swoje serce</button></a>
    </form>
</section>
<div class="snow-container"></div>
<div style="height: 200vh;">

<script src="script.js"></script>
</body>
</html>