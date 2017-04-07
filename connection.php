<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("bootstrap.php"); ?>
    <title>Connection</title>
</head>
<body>

<form action="connecteroupas.php" method="POST" class="text-center">
    <div>
        <label for="login"><h4>Login</h4></label>
        <input type="text" id="login" name="login">
    </div>
    <div>
        <label for="password"><h4>Password</h4></label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <button type="submit">Connection</button>
    </div>
    <div>
        <a href="creationducompte.php">Créer un compte</a>
    </div>
</form>

</body>
</html>