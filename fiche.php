<?php include("inc.php"); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/script.css">
    <title>Fiche du Pokémon</title>
</head>
<body>

<?php
$id = $_GET['id'];
$req = $bdd->prepare('SELECT * FROM pokemon WHERE id = ?');
$req->execute(array($id));
?>
<table>
    <thead>
    <tr>
        <th><h1>ID</h1></th>
        <th><h1>Numéro</h1></th>
        <th><h1>Nom</h1></th>
        <th><h1>Type</h1></th>
        <th><h1>Faiblesse</h1></th>
        <th><h1>Image</h1></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($donnees = $req->fetch())
    {
        ?>
        <tr>
            <td><?php echo $donnees['id'] ?></td>
            <td><?php echo $donnees['numero'] ?></td>
            <td><?php echo $donnees['nom'] ?></td>
            <td><?php echo $donnees['type'] ?></td>
            <td><?php echo $donnees['faiblesses'] ?></td>
            <td><img src="<?php echo $donnees['image'] ?>"</td>
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