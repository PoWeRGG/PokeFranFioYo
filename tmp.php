<?php include("inc.php"); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/script.css">
    <title>PokeSIO</title>
</head>
<body>
<head>
    <div>
        <h1>PoWeR GG</h1><br>
        <h4>By P.F, G.F, F.Y</h4>
    </div>
</head>
<form action="tmp.php" method="post" id="gauche">
    <div>
        <label for="rechercherpokemon"><h4>Rechercher un Pokemon</h4></label>
        <input type="text" id="rechercherpokemon" name="rechercherunpokemon">
    </div>
    <div>
        <label for="type"><h4>Type : </h4></label>
        <SELECT name="type" id="type" size="l">
            <OPTION>Eau
            <OPTION>Feu
            <OPTION>Herbe
            <OPTION>Insecte
        </SELECT>
    </div>
</form>
<div id="droite">
    <?php include("tableau.php"); ?>
</div>
</body>
</html>