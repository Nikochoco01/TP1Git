<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Recap Form</title>
</head>
<body>
    <header>
        <h1> Recap Form </h1>
        <?php include_once "module/nav.php" ?>
    </header>
    <main>

    <section>
        <h2> Résultats formulaire contact :  </h2>
        <p>Sujet : <?php echo $_POST['subject'] ?> </p>
        <p> Nom : <?php echo $_POST['name'] ?> </p>
        <p>Prénom : <?php echo $_POST['surname'] ?> </p>
        <p>Mail : <?php echo $_POST['mailAddress'] ?> </p>
        <p>Message : <?php echo $_POST['message'] ?> </p>

    </section>

    <section>
        <h2> Résultats formulaire inscription</h2>
        <p> Nom : <?php echo $_POST['name'] ?> </p>
        <p>Prénom : <?php echo $_POST['surname'] ?> </p>
        <p>Mail : <?php echo $_POST['mailAddress'] ?> </p>
        <p>Mot de passe : <?php echo $_POST['password'] ?> </p>

        <p>Date de naissance : <?php echo $_POST['birthDate'] ?> </p>
        <p>Adresse postal : <?php echo $_POST['postalAddress'] ?> </p>
        <p>Code postal : <?php echo $_POST['postalCode'] ?> </p>
        <p>Ville : <?php echo $_POST['city'] ?> </p>

        <p> Sexe masculin : <?php echo testCheckBox('sexeMan') ?> </p>
        <p> Sexe feminun : <?php echo testCheckBox('sexeWoman') ?> </p>
        <p> Sexe non spécifié : <?php echo testCheckBox('sexeUndef') ?> </p>

        <p>Jeux vidéo : <?php echo testCheckBox('videoGame') ?> </p>
        <p>Sport : <?php echo testCheckBox('sport') ?> </p>
        <p>Lecture : <?php echo testCheckBox('read') ?> </p>
        <p>La musique : <?php echo testCheckBox('music') ?> </p>

        <p>Votre photo : <?php echo traitementPhoto() ?> </p>
    </section>

    <?php 

        move_uploaded_file(
            $_FILES['photo']['tmp_name'], __DIR__.'/photoTMP.png'
        );

        function traitementPhoto(){
            echo '<img src="/photoTMP.png" alt="photo que voujs avez envoyé">';
        }

        function testCheckBox($name){
            if(isset($_POST[$name])){
                echo $_POST[$name];
            }
            else{
                echo 'non renseigner';
            }
        }
    ?>
     
    </main>
    <?php include_once 'module/footer.php' ?>
</body>
</html>