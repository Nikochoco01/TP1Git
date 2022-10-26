<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Astroneer</title>
</head>
<body>
    <header>
        <h1> Astroneer </h1>
        <?php include_once "../module/nav.php" ?>
    </header>
    <main>
            <article id="Article2">
                <h2> Astroneer </h2>
                <?php ChoicePicture('/img/astroneer' , 'Astroneer') ?>
                <p> <strong>Astroneer</strong> est un jeu indépendant d'exploration, de survie et d'artisanat sur le thème de l'espace, 
                    développé par <strong>System Era</strong>.
                </p>
                <p> <strong>Explorez et remodelez</strong> des mondes lointains ! <strong>Astroneer</strong> se passe lors de la <strong> ruée vers l'or du XXVe siècle</strong> : 
                    les joueurs doivent <strong>explorer</strong> les confins de l'espace, <strong>risquant leurs vies et leurs ressources</strong> dans un environnement hostile 
                    pour dénicher des <strong>découvertes rares</strong> et <strong>percer les mystères</strong> de l'Univers.</p>
                <p>source Wiki officiel : <a href="https://astroneer.fandom.com/fr/wiki/Astroneer_Wiki" target="_blank"> plus d'information ici </a></p>
            </article>
    </main>

    <?php include_once '../module/footer.php' ?>

    <?php 
        function choicePicture( $path , $describe){
            if($_SERVER['HTTP_ACCEPT'] == 'image/avif'){
                echo '<img src="' . $path .'.avif" alt="image du jeux' . $describe .'">';
            }
            else if($_SERVER['HTTP_ACCEPT'] == 'image/jpg'){
                echo '<img src="' . $path .'.webp" alt="image du jeux' . $describe .'">';
            }
            else{
                echo '<img src="' . $path .'.jpg" alt="image du jeux' . $describe .'">';
            }
        }
    ?>

</body>
</html>