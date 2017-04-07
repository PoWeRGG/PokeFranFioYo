<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("bootstrap.php"); ?>
    <title>Création du compte</title>
</head>
<body>

<form action="creationducompteoupas.php" method="post">
    <div>
        <label for="username">Pseudo: </label>
        <input type="text" id="username" name="creationusername">
    </div>
    <div>
        <label for="password1">Mot de passe : </label>
        <input type="password" id="password1" name="creationpassword1">
    </div>
    <div>
        <label for="password2">Confirmation : </label>
        <input type="password" id="password2" name="creationpassword2">
    </div>
    <div class="button">
        <button type="submit">Créer le compte</button>
    </div>
</form>

</body>
</html>