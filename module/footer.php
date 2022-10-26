<?php 
    $prenom = 'Nikola';
    $nom = 'Chevalliot';

    include_once __DIR__."/../include/config.php";
?>

<footer>
    <section class="copyright">
        <p>Des questions, envie d'échanger sur ces jeux ? <a href="/contact.php"> <strong>rejoint moi !</strong> </a></p>
        <p>Pour me joindre rapidement : <strong> <?php echo  DEFAULT_PHONE_NUMB ?> </strong> ou par mail  <strong> <?php echo  DEFAULT_MAIL ?> </strong></p>
        <p>Pour tous courier format papier : <strong> <?php echo  DEFAULT_ADDRESS ?> </strong> </p>
        <h6>Copyright : <?php echo  $prenom . ' ' . $nom ?> </h6>
    </section>

    <section class="articleSection">
        <h2>Retour aux articles</h2>
        <a href="#Article1"> Valorant</a>
        <a href="#Article2">League of Legends</a>
        <a href="#Article3">Astroneer</a>
        <a href="#Article4">Rocket League</a>
    </section>
</footer>