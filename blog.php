<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/default.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> Accueil <?php echo $_SESSION['user'] ?> </h1>
        <?php include_once "module/nav.php" ?>
    </header>

    <main>
        


    </main>

    <?php include_once 'module/footer.php' ?>
</body>
</html>