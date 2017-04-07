<?php
include("inc.php");
echo $_POST['creationpassword1'] . " et " . $_POST['creationusername'];
if (($_POST['creationpassword1'] != $_POST['creationpassword2']) || ($_POST['creationusername'] == null) || ($_POST['creationpassword1'] == null))
{
    header("Location:creationducompte.php");
}
else
{
    $req = $bdd->prepare('INSERT INTO connection() VALUES(null, ?, ?, 0)');
    $req->execute(array($_POST['creationusername'], $_POST['creationpassword1']));
    header("Location:connection.php");
}
?>