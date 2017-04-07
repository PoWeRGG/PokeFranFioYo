<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/scriptV2.css">
    <title>PokeSIO</title>
</head>
<body>
<h1>Recherche de Pokemon</h1>
<div class="row">
    <div class="col-lg-4 bloc-recherche">
        <form action="" method="get">
            <div>
                <label for="rechercherunpokemon">Rechercher un Pokemon</label>
                <input type="text" id="rechercherunpokemon" name="rechercherunpokemon">
            </div>
            <div>
                <label for="type">Type</label>
                <select name="type">
                    <option>
                    <option>Eau
                    <option>Feu
                    <option>Herbe
                    <option>Insecte
                </select>
            </div>
            <div>
                <button>Rechercher</button>
            </div>
        </form>
    </div>
    <div class="col-lg-8 bloc-recherche">
        <?php include("requeteV2.php"); ?>
    </div>
</div>


</body>
</html>