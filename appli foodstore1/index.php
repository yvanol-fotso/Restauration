<?php
require 'fonction/functionsComplete.php';

$restaurant = getAllresto();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>OhmyFood</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="./moncode/css/connex.css"/>
    <link rel="stylesheet" href="./moncode/css/monfichier.css">
    <meta name="viewport" content="initial-scale=1"/>    
</head>

<body>
    <div class="loader"></div>
    <div class="page">
        <header>
            <div class="logo1"><img src="images/logo/foodstore.png" alt="logo"/></div>
            <p><i class="fas fa-map-marker-alt"></i> Dschang, Menoua</p>
            <nav>
                <ul>
                  <li class="menu-deroulant">
                    <a href="pages/connexionclient.php">Connexion</a>
                    <ul class="sous-menu">
                      <li><a href="pages/connexionadmin.php">Administrateur</a></li>
                      <li><a href="pages/restaurateur.php">Restaurateur</a></li>
                      <li><a href="pages/connexionclient.php">Client</a></li>
                    </ul>
                  </li>
                  <li class="menu-deroulant">
                    <a href="pages/inscriptionclient.php">inscription</a>
                  </li>
                  <li><a href="#">À propos</a></li>
                  <li><a href="#">Contactez-nous</a></li>
                </ul>
              </nav>
        
        </header>
        
        <section class="section1">
            <h1 class="section1__label">Réservez le menu qui vous convient</h1>
            <p>Découvrez des restaurants d'exception, séléctionnés par nos soins</p>
            <a href="#section3" class="btn">Explorer nos restaurants</a>            
        </section>

        <section class="section2">
            <h2 class="section2__title">Fonctionnement</h2>
            <ol class="section2__list">
                <li><span class="fas fa-mobile-alt"></span>Choisissez un restaurant</li>
                <li><span class="fas fa-list-ul"></span>Composez votre menu</li>
                <li><span class="fas fa-store"></span>Dégustez au restaurant</li>
            </ol>
        </section>

        <section class="section3">
            <h3 class="section3__title" id="section3">Restaurants</h3>
            <div class="carte">
               <?php foreach($restaurant as $resto): ?>

                <a href=""><figure>
                    <img src="images/restaurants/<?= $resto['images']?>" alt="palettedugout"/>
                    <figcaption>
                        <div class="new">
                            <p>Nouveau</p>
                            <!-- <a href="detail.php?id=<?= $resto['id']?>" class="detail">+</a> -->
                        </div>
                        <div class="restolieu"><span class="resto"><?= $resto['nom']?></span><p><?= $resto['adresse']?></p></div>
                        <div class="heart"><i class="far fa-heart"></i><i class="fas fa-heart"></i></div>
                    </figcaption>    
                    </figure></a>
                <?php endforeach ?>
            </div>
        </section>

        <footer>
            <div class="logo2">ohmyfood</div>
            <ul>
                <li><a href="#"><i class="fas fa-utensils "></i> Proposer un restaurant</a></li>
                <li><a href="#"><i class="fas fa-hands-helping "></i> Devenir Partenaire</a></li>     
                <li><a href="#">Mentions légales</a></li>
                <li><a href="mailto:ohmyfood@gmail.com">Contact</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>