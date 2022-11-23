<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/default.css">
    <title>Inscription</title>
</head>
<body>
    <header>
        <h1> Inscription </h1>
        <?php include_once "module/nav.php"?>
    </header>
    <main>

        <form action="/bdSubscribe.php" method="post" class="subscribeForm" enctype="multipart/form-data">

            <h2>Inscrivez-vous: </h2>
            
            <label for="name">Nom<em class="requiredMark">*</em></label>
            <input type="text" name="name" id="name" required class="name">

            <label for="surname">Prénom <em class="requiredMark">*</em></label>
            <input type="text" name="surname" id="surname" required class="surname">

            <label for="password">Mot de passe <em class="requiredMark">*</em></label>
            <input type="password" name="password" id="password" required class="password">

            <label for="mailAddress">@ e-mail <em class="requiredMark">*</em></label>
            <input type="email" name="mailAddress" id="mailAddress" class="mailAddress" required pattern="[A-Z.a-z0-9]+@[A-Za-z0-9]+\.[a-zA-Z]{3}">
            
            <label for="birthDate">Date de naissance <em class="requiredMark">*</em></label>
            <input type="date" name="birthDate" id="birthDate" class="birthDate" required>

            <label for="postalAddress">Adresse <em class="requiredMark">*</em></label>
            <input name="postalAddress" id="postalAddress" required class="postalAddress">

            
            <label for="postalCode">Code postal <em class="requiredMark">*</em></label>
            <input name="postalCode" id="postalCode" class="postalCode" required pattern="[0-9]{5}">

            
            <label for="city">Ville <em class="requiredMark">*</em></label>
            <input name="city" id="city" required class="city">

            <fieldset class="sexeGroup">
                <legend> Sexe </legend>
                <div>
                    <label for="sexeMan">Homme</label>
                    <input type="checkbox" name="sexeMan" id="sexeMan" value="Man">
                </div>

                <div>
                    <label for="sexeWoman"> Femme</label>
                    <input type="checkbox" name="sexeWoman" id="sexeWoman" value="Woman">
                </div>

                <div>
                    <label for="sexeUndef"> Non Spécifié </label>
                    <input type="checkbox" name="sexeUndef" id="sexeUndef" value="Undef">
                </div>
            </fieldset>

            <fieldset class="passionGroup">
                <legend> Passion </legend>
                <div>
                    <label for="videoGame">Jeux vidéo</label>
                    <input type="checkbox" name="videoGame" id="videoGame" value="videoGame">
                </div>

                <div>
                    <label for="sport"> Sport</label>
                    <input type="checkbox" name="sport" id="sport" value="sport">
                </div>

                <div>
                    <label for="read"> Lire </label>
                    <input type="checkbox" name="read" id="read" value="read">
                </div>

                <div>
                    <label for="music"> La musique </label>
                    <input type="checkbox" name="music" id="music" value="music">
                </div>
            </fieldset>

            <label for="photo">Photo</label>
            <input type="file" name="photo" accept="image/png , image/jpeg" id="photo" class="photo">

            <input type="submit" value="Envoyer" class="submitButton" id="subscribeButton">

            <input type="reset" value="Annuler" class="resetButton">
            <h5>Les champs avec <em class="requiredMark">*</em> doivent être remplis</h5>
        </form>
    </main>
    <?php include_once 'module/footer.php' ?>
</body>
</html>