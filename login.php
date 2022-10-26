<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Connexion</title>
</head>
<body>
    <header>
        <h1> Se connecter </h1>
        <?php include_once "module/nav.php" ?>
    </header>
    <main>

    <form action="/processing.php" method="post">

        <label for="user"> E-mail : </label>
        <input type="text" name="user">

        <label for="passWord"> Mot de passe</label>
        <input type="password" name="passWord">

        <input type="submit" value="Se connecter">

    </form>

    </main>

    <?php include_once 'module/footer.php' ?>

</body>
</html>