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
                <h2> League of Legends </h2>
                <?php ChoicePicture('/img/LOL' , 'League of Legends') ?>
                <p> <strong>League of Legends (abrégé LoL)</strong> est un jeu vidéo sorti en <strong>2009</strong> de type arène de bataille en ligne, <strong>free-to-play</strong>, 
                    développé et édité par <strong>Riot Games</strong> sur Windows et Mac OS.</p>
                    <p>Le mode principal du jeu voit s'affronter <strong>deux équipes de 5 joueurs</strong> en temps réel dans des parties d'une durée d'environ une demi-heure, 
                        chaque équipe <strong>occupant et défendant sa propre base</strong>  sur la carte. Chacun des <strong>dix joueurs contrôle un personnage</strong> 
                        à part entière parmi les plus de <strong>150</strong> qui sont proposés. Ces personnages, connus sous le nom de <strong>« champions »</strong> dans le jeu, 
                        disposent de compétences uniques et d'un style de jeu qui leur est propre.
                    </p>
                <p>source Wikipédia : <a href="https://fr.wikipedia.org/wiki/League_of_Legends" target="_blank"> plus d'information ici </a></p>
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