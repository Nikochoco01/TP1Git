<?php 
    if(isset($_SESSION)): ?>
        <nav>
            <div class="burgerMenu">
                <input type="checkbox" name="openMenu" id="burgerButton" class="burgerButton">
                <label for="openMenu" id="visualBurger" class="visualBurger">
                    <span class="top"></span>
                    <span class="mid"></span>
                    <span class="bot"></span>
                </label>
            </div>

            <ul class="menu" id="menu">
                <li class=" <?php echo active("/accueil.php") ?> "> <a href="/accueil.php"> Accueil </a> </li>
                <li class=" <?php echo active("/contact.php") ?>"> <a href="/contact.php"> Contact </a> </li>
                <li class="dropDownMenu"><a href="/blog.php">Blog</a>
                    <ul class="subMenu">
                        <li class=" <?php echo active("/addBlog.php") ?>"> <a href="/addBlog.php"> Créer un blog </a> </li>
                        <li class=" <?php echo active("/valorant.php") ?>"> <a href="/article/valorant.php"> Valorant </a> </li>
                        <li class=" <?php echo active("/leagueOfLegends.php") ?>"> <a href="/article/leagueOfLegends.php"> League Of Legends </a> </li>
                        <li class=" <?php echo active("/astroneer.php") ?>"> <a href="/article/astroneer.php"> Astroneer </a> </li>
                        <li class=" <?php echo active("/rocketLeague.php") ?>"> <a href="/article/rocketLeague.php"> Rocket League </a> </li>
                    </ul>
                </li>
                <li class=" <?php echo active("/login.php") ?>"> <a href="/unLog.php"> <?php echo verifSession() ?> </a> </li>
            </ul>
        </nav>
<?php 
    else:
?>
    <nav>
        <div class="burgerMenu">
            <input type="checkbox" name="openMenu" id="burgerButton" class="burgerButton">
            <label for="openMenu" id="visualBurger" class="visualBurger">
                <span class="top"></span>
                <span class="mid"></span>
                <span class="bot"></span>
            </label>
        </div>

        <ul class="menu" id="menu">
            <li class=" <?php echo active("/subscribe.php") ?>"> <a href="/subscribe.php"> Inscription </a> </li>
            <li class=" <?php echo active("/login.php") ?>"> <a href="/unLog.php"> <?php echo verifSession() ?> </a> </li>
        </ul>
    </nav>
<?php 
    endif
?>

<?php 
        function active($pageName){
            if($_SERVER['SCRIPT_NAME'] == $pageName){
                return "actif";
            }
        }

        function verifSession(){
            if(isset($_SESSION)){
                return "Se déconnecter";
            }
            else{
                return "Se connecter";
            }
        }
?>