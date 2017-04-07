<?php include("inc.php");
$req = $bdd->prepare('SELECT * FROM pokemon WHERE nom LIKE ? AND type LIKE ?');
$req->execute(array('%'.$_GET['rechercherunpokemon'].'%', '%'.$_GET['type'].'%'));

// On affiche chaque entrée une à une
?>
<table class="table table-striped">
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
