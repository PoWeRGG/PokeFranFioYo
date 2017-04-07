<?php include("inc.php"); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/script.css">
    <title>Tableau des Pokemon</title>
</head>
<body>

<?php
$reponse = $bdd->query('SELECT * FROM pokemon');
// On affiche chaque entrée une à une
?>
<table>
    <tr>
        <th><h1>Nom</h1></th>
        <th><h1>Type</h1></th>
        <th><h1>Faiblesses</h1></th>
    </tr>
    <?php
    while ($donnees = $reponse->fetch())
    {
    ?>
        <tr>
            <td><a href="fiche.php?id=<?php echo $donnees['id'] ?>"><?php echo $donnees['nom']; ?></a></td>
            <td><?php echo $donnees['type']; ?></td>
            <td><?php echo $donnees['faiblesses']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
?>

</body>
</html>