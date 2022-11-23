<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Contact</title>
</head>
<body>
    <header>
        <h1> Contact </h1>
        <?php include_once "module/nav.php" ?>
    </header>
    <main>
        <form action="/bdBlog.php" method="post" class="contactForm" id="contactForm">
            <h2>Ecrit ton article :</h2>
            <label for="subject">Titre de l'article <em class="requiredMark">*</em></label>
            <input type="text" name="subject" id="subject" required class="subject">

            <label for="name">Nom<em class="requiredMark">*</em></label>
            <input type="text" name="name" id="name" required class="name">

            <label for="surname">Prénom <em class="requiredMark">*</em></label>
            <input type="text" name="surname" id="surname" required class="surname">

            <label for="mailAddress" id="labelEmail">@ e-mail <em class="requiredMark">*</em></label>
            <input type="email" name="mailAddress" id="mailAddress" class="mailAddress" required pattern="[A-Z.a-z0-9]+@[A-Za-z0-9]+\.[a-zA-Z]{3}">

            <label for="photo">Photo de l'article</label>
            <input type="file" name="photo" accept="image/png , image/jpeg" id="photo" class="photo">

            <label for="description">Descriptif <em class="requiredMark">*</em></label>
            <textarea name="description" id="description" cols="10" rows="2" maxlength="255" required class="description"></textarea>

            <label for="message">Message <em class="requiredMark">*</em></label>
            <textarea name="message" id="message" cols="30" rows="3" required class="message"></textarea>

            <input type="submit" value="Envoyer" class="submitButton" id="submitButton">

            <input type="reset" value="Annuler" class="resetButton">
            <h5>Les champs avec <em class="requiredMark">*</em> doivent être remplis</h5>
        </form>
    </main>
    <?php include_once 'module/footer.php' ?>

    <script src="/js/default.js"></script>
</body>
</html>