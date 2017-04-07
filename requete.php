<?php include("inc.php"); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/script.css">
    <title>Document</title>
</head>
<body>

<?php
$req = $bdd->prepare('SELECT * FROM pokemon WHERE nom LIKE  ?');
$req->execute(array('%'.$_GET['rechercheUnPokemon'].'%'));
// On affiche chaque entrée une à une
?>
<table>
    <thead>
    <tr>
        <th><h1>Nom</h1></th>
        <th><h1>Type</h1></th>
        <th><h1>Faiblesse</h1></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($donnees = $req->fetch())
    {
    ?>
        <tr>
            <td><a href="fiche.php?id=<?php echo $donnees['id'] ?>"><?php echo $donnees['nom'] ?></a    ></td>
            <td><?php echo $donnees['type'] ?></td>
            <td><?php echo $donnees['faiblesses'] ?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php
$req->closeCursor(); // Termine le traitement de la requête
?>

</body>
</html>