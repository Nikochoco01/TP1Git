<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Mon site</title>
</head>
<body>
    <header>
        <h1> Accueil <?php echo $_SESSION['user'] ?> </h1>
        <?php include_once "module/nav.php" ?>
    </header>
    <main>
            <article id="Article1">
                <h2> Valorant </h2>
                <img src="img/Valo.jpg" alt="image du jeux Valorant">
                <p> <strong>Valorant</strong> est un jeu FPS (First Person Shoter), du même style que CS:GO</p>
            </article>
    
            <article id="Article2">
                <h2> League of Legends </h2>
                <img src="img/LOL.jpg" alt="image du jeu League of Legends">
                <p> <strong>League of Legends</strong> est un jeu type MOBA, la carte est composé de 3 voies (Haut , Milieu, Bas)</p>
            </article>

            <article id="Article3">
                <h2> Astroneer </h2>
                <img src="img/astroneer.jpg" alt="image du jeu Astroneer">
                <p> <strong>Astroneer</strong> est un jeu d'exploration spaciale l'objectif est de découvrir l'origine de mystérieuse structure sur les planetes du systeme solaire</p>
            </article>
    
            <article id="Article4">
                <h2> Rocket League</h2>
                <img src="img/RL.jpg" alt="image du jeu Rocket League">
                <p> <strong>Rocket League</strong> est un jeu de foot où les joueurs joue avec des voitures, l'objectif étant de marquer le plus de but possible en 5 mins </p>
            </article>
    </main>

    <?php include_once 'module/footer.php' ?>

</body>
</html>