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

            <ul class="menu" id="menu">
                <?php modifNav('/index.php' , 'Accueil', false) ?>
                <?php modifNav('/contact.php' , 'Contact' ,false) ?>
                <li class="dropDownMenu"><a href="">Blog</a>
                    <ul class="subMenu">
                        <?php modifNav('../article/valorant.php' , 'Valorant' ,false) ?>
                        <?php modifNav('#article2' , 'League of Legends' ,false) ?>
                        <?php modifNav('#article3' , 'Astroneer' ,false) ?>
                        <?php modifNav('#article4' , 'Rocket League' ,false) ?>
                    </ul>
                </li>
                <?php modifNav('/subscribe.php' , 'Inscription' , false) ?>
            </ul>
        </nav>
</header>

    <?php function modifNav($pageName , $buttonName , $openType){

            if($_SERVER['SCRIPT_NAME'] == $pageName){
                echo '<li class="actif">';
            }
            else{
                echo '<li>';
            }
            if($openType){
                echo '<a href="'. $pageName .'" target="_blank">'. $buttonName .'</a>
                </li>';
            }
            else{
                echo '<a href="'. $pageName .'">'. $buttonName .'</a>
                </li>';
            }
        }
    ?>