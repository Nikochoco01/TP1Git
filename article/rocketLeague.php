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
            <article id="Article2">
                <h2> Rocket League </h2>
                <?php ChoicePicture('/img/RL' , 'Rocket League') ?>
                <p> <strong>Rocket League</strong> est un jeu vidéo développé et édité par <strong>Psyonix3</strong>. 
                    Il sort en <strong>juillet 2015</strong> sur <strong>Windows</strong> et sur <strong>PlayStation 4</strong>, en <strong>février 2016 sur Xbox One </strong>, 
                    en <strong>septembre 2016 sur Linux et Mac</strong> et en <strong>novembre 2017 sur Nintendo Switch</strong>.
                </p>
                <p> <strong>Deux équipes</strong>, composées de <strong>un à quatre joueurs</strong> conduisant des véhicules, 
                    s'affrontent au cours d'un match afin de <strong>frapper un ballon</strong> et de marquer dans le <strong>but adverse</strong>. 
                    Les voitures sont équipées de <strong>propulseurs (boost)</strong> et peuvent sauter, permettant de jouer le <strong>ballon dans les airs</strong>. 
                    Des mises à jour du jeu incluent également d'autres modes de jeu, se rapprochant du <strong>basket-ball ou du hockey sur glace</strong>.</p>
                <p>source Wikipédia : <a href="https://fr.wikipedia.org/wiki/Rocket_League" target="_blank"> plus d'information ici </a></p>
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