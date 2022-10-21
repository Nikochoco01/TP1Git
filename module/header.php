<?php
 $titlePage = 'Bienvenue';
?>

<header>
      <?php echo "<h1>". $titlePage . "</h1>" ?>
        <nav>
            <div class="burgerMenu">
                <input type="checkbox" name="openMenu" id="burgerButton" class="burgerButton">
                <label for="openMenu" id="visualBurger" class="visualBurger">
                    <div class="top"></div>
                    <div class="mid"></div>
                    <div class="bot"></div>
                </label>
            </div>

            <ul class="menu">
                <li> <a href="/index.php"> Accueil </a></li>
                <li> <a href=""> Présentation </a></li>
                <li> <a href="/contact.php" target="_blank"> Contact </a></li>
                <li class="dropDownMenu"><a href="">Blog</a>
                    <ul class="subMenu">
                        <li><a href="#article1"> Valorant </a></li>
                        <li><a href="#article2"> League of Legends </a></li>
                        <li><a href="#article3"> Astroneer </a></li>
                        <li><a href="#article4"> Rocket League </a></li>
                    </ul>
                </li>
                <li><a href="/subscribe.php" target="_blank">Inscription</a></li>
            </ul>
        </nav>
</header>