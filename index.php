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
<body class="text-center">
<br><br><br>
<h1>PoWeR GG</h1><br>
<p class="lead">
    Fait par les PoWeR GG
</p>
<h1>Recherche de Pokémon</h1>
<form action="tableau.php">
    <button>Afficher tout les Pokemon</button>
</form><br>
<form action="requete.php">
    <input type="text" name="rechercheUnPokemon" placeholder="Rechercher un Pokemon"/>
    <button>OK</button>
</form><br>
<form action="type.php">
    Type :
    <SELECT name="type" size="l">
        <OPTION>Eau
        <OPTION>Feu
        <OPTION>Herbe
        <OPTION>Insecte
    </SELECT>
    <button>OK</button>
</form><br>

</body>
</html>