<?php
$db = new PDO('mysql:host=185.98.131.148; dbname=speri1516488; charset=utf8', 'speri1516488', 'iwbxxxwfej');
$select=$db->query("SELECT * FROM menu");
$select2=$db->query("SELECT * FROM burgers");
$select3=$db->query("SELECT * FROM desserts");
$select4=$db->query("SELECT * FROM vins");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" type="image/png" href="assets/img/fav.png" />
    <title>L'ADRESSE Restaurant – Burger gourmet</title>
</head>

<body>

    <div class="button_container" id="toggle"><!-- Hamburger --->
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>

    <div class="overlayHamb" id="overlayHamb"><!-- Menu hamburger -->
        <nav class="overlay-menu">
            <ul>
                <li><a href="index">Accueil</a></li>
                <li><a href="#display-menu">Nos plats</a></li>
                <li><a href="#ingredients">Ingrédients</a></li>
                <li><a href="#restaurant">Restaurant</a></li>
                <li><a href="#coordinate">Coordonnées</a></li>
            </ul>
        </nav>
    </div>

    <header class="navbar"><!-- Navbar -->
        <nav class="header" aria-labelledby="main-navigation">
            <div class="grid content-navbar align-center">
              <div class="desktop-menu navbarLink"><a href="index">Accueil</a></div>
              <div class="desktop-menu navbarLink"><a href="#display-menu">Nos plats</a></div>
              <div>
                <a href="index">
                    <img class="logo" src="assets/img/logo.svg" alt="Logo">
                </a>              
              </div>
              <div class="desktop-menu navbarLink"><a href="#ingredients">Ingr&eacute;dients</a></div>
              <div class="desktop-menu navbarLink"><a href="#restaurant">Restaurant</a></div>
            </div>
        </nav>        
    </header>      

    <main>
        <div id="video"><!-- Video presentation -->
            <div class="overlay"></div><!-- Overlay on video -->        
            <video autoplay muted loop poster="assets/img/restaurantOne.png" id="herovideo">
                <source src="assets/vid/ladresse.mp4" type="video/mp4">                    
            </video>
        </div>

        <div id="display-menu">
            <div class="grid content-menu">
                
                <div class="menu-image"></div>
                <div id="carte" class="menu bg-yellow">
                    <h2 class="pb-2r">Nos plats</h2>
                    <div class="content-wrapper">
                        <div aria-labelledby="menu-navigation" class="flex justify-center">
                            <ul class="flex justify-center">
                                <li><a id="1" class="menuLink selected iosFix">&Agrave; la carte</a></li> <!--Change selected area on click-->
                                <li><a id="2" class="menuLink iosFix">Burgers</a></li>
                                <li><a id="3" class="menuLink iosFix">Desserts</a></li>
                                <li><a id="4" class="menuLink">Vins</a></li>
                            </ul>
                        </div>

                    <div id="menu1">
                            <?php
                                $count=1;
                                while($i = $select->fetch()){
                                    ?>
                                <div class="pb-2r">
                                    <h3><?=$i['titre']?></h3>
                                    <p><?=$i['ingredients']?></p>
                                </div>
                                <?php }?>
                            </div>
        
                            
                            <div id="menu2" class="hidden">
                            <?php
                                $count=1;
                                while($i = $select2->fetch()){
                                    ?>
                                <div class="pb-2r">
                                    <h3><?=$i['titre']?></h3>
                                    <p><?=$i['ingredients']?></p>
                                </div>
                                <?php }?>
                            </div>
                            
                            <div id="menu3" class="hidden">
                            <?php
                                $count=1;
                                while($i = $select3->fetch()){
                                    ?>
                                <div class="pb-2r">
                                    <h3><?=$i['titre']?></h3>
                                    <p><?=$i['ingredients']?></p>
                                </div>
                                <?php }?>
                            </div>
                            
                            <div id="menu4" class="hidden">
                            <?php
                                $count=1;
                                while($i = $select4->fetch()){
                                    ?>
                                <div class="pb-2r">
                                    <h3><?=$i['titre']?></h3>
                                    <p><?=$i['ingredients']?></p>
                                </div>
                                <?php }?>
                            </div>


                            <div class="mt-2r">
                        <a class="cta" href="assets/files/menu.pdf">Voir le menu complet</a>
                    </div>
                </div>
            </div>

            </div>
        </div>

        <div id="ingredients" class="bg-white">
            <div class="content-wrapper">  
                <div class="grid content-ingredients">
                    <div class="ingredients-title">
                        <div class="flex justify-center align-center" >
                            <h2>Ingrédients</h2>  
                        </div>
                    </div>
                    <div class="ingredients-fresh-icon">
                        <img class="icon" src="assets/img/icon-fresh.svg" alt="Fresh product icon">
                        <p>Des produits frais</p>
                    </div>
                    <div class="ingredients-local-icon">
                        <img class="icon" src="assets/img/icon-local.svg" alt="Local product icon">
                        <p>Des produits locaux</p>
                    </div>
                    <div class="ingredients-homemade-icon">
                        <img class="icon" src="assets/img/icon-homemade.svg" alt="Homemade product icon">
                        <p>Nos plats sont fait maison.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="restaurant" class="bg-black">
            <div class="content-wrapper">  
                <div class="restaurant-title">
                    <div class="flex justify-center align-center" >
                        <h2>Restaurant</h2>                            
                    </div>
                </div>
                <div class="restaurant-description">
                    <p>Ici, nous réadaptons des plats sous la forme de burgers !</p>
                </div>

                <div class="grid content-restaurant">
                    <div class="restaurant-pic-1">
                        <img class="img-40-40" src="assets/img/restaurantOne.png" alt="Photo du logo sur une vitrine">
                    </div>
                    <div class="restaurant-pic-2">
                        <img class="img-40-40" src="assets/img/restaurantTwo.png" alt="Photo de l'intérieur du restaurant">
                    </div>
                    <div class="restaurant-pic-3">
                        <img class="img-40-40" src="assets/img/restaurantThree.png" alt="Photo d'un hamburger">
                    </div>
                </div>
            </div>
        </div>

        <div id="coordinate" class="bg-white">
            <div class="content-wrapper">
                <div class="grid content-coordinate space-between gap-4r">
                    <div class="adress">
                        <h2>Adresse</h2>
                       
                        <p class="p-adress">
                            <span class="display-block">34 Bis Rue des Bouchers</span>
                            <span class="display-block">59800 Lille</span>
                            <span class="display-block">France</span>
                        </p>                    
                    </div>

                    <div class="hours">
                        <h2>Horaires de service</h2>
                        <p class="p-hours">
                            <span class="display-block">Mardi au vendredi midi 12:00 - 14:00</span>
                            <span class="display-block">Mardi au mercredi soir 19:30 - 22:00</span>
                            <span class="display-block">Jeudi soir 19:30 - 22:30</span>
                            <span class="display-block">Vendredi soir 19:30 - 23:00</span>
                            <span class="display-block">Samedi 12:00 - 15:00 / 19:30 - 23:00</span>
                        </p>
                    </div>

                    <div class="phone">
                        <h2>Téléphone</h2>
                        <a href="tel:+33359896633">+33 3 59 89 66 33</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.4216714010954!2d3.0560835159011552!3d50.63785948172408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d587392a1c1f%3A0xec562c3c26d6c69b!2sL&#39;Adresse!5e0!3m2!1sfr!2sfr!4v1615902134247!5m2!1sfr!2sfr" width="100%" height="100%" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </main>

    <footer class="bg-black">
        <div class="content-wrapper">
            <div class="grid content-footer align-center">
                <div class="copyright">
                    <p class="txt-white">L'ADRESSE &copy;</p>
                </div>

                <div class="legal">
                    <a class="pr-1r" href="legal">Mentions Légales</a>
                    <a href="privacy">Politique de confidentialité</a>
                </div>
    
                <div class="social">
                    <a href="https://www.facebook.com/LAdresse-Burgers-Lille-1382392288652147/" target="_blank">
                        <img class="icon-social pr-2r" src="assets/img/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/l_adresse_lille/" target="_blank">
                        <img class="icon-social" src="assets/img/instagram.svg" alt="Instagram">
                    </a>
                </div>                  
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>