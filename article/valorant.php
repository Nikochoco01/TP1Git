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
    <?php include_once '../module/header.php' ?>
    <main>
            <article id="Article1">
                <h2> Valorant </h2>
                <?php ChoicePicture('/img/Valo' , 'Valorant') ?>
                <p> <strong> Valorant (stylisé VALORANT) </strong> est un jeu vidéo <strong> free-to-play </strong> de tir à la première personne en multijoueur développé et édité par Riot Games et sorti le 2 juin 2020.</p>
                <p> Le jeu, dont le développement commence en <strong>2014</strong>, 
                    est annoncé pour la première fois sous le nom de code <strong>Project A</strong> en <strong>octobre 2019</strong>. 
                    Il a d'abord été annoncé pour être publié sur Windows durant l'été 2020, 
                    sans aucun portage sur console et macOS confirmé, et sa phase de bêta fermée a débuté le <strong>7 avril 2020</strong>. 
                    Il s'agit du premier jeu développé par <strong>Riot Games</strong> dans le genre, et il est finalement sorti en version finale le <strong>2 juin 2020</strong>.
                </p>
                <p>source Wikipédia : <a href="https://fr.wikipedia.org/wiki/Valorant" target="_blank"> plus d'information ici </a></p>
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