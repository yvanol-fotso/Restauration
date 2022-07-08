<?php
require '../fonction/functionsComplete.php';

$restaurant = getAllresto();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <title>Liste resto</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="../moncode/css/connex.css"/>
    <link rel="stylesheet" href="../moncode/css/monfichier.css">
    <meta name="viewport" content="initial-scale=1"/>    
</head>

<body>
    <div class="loader"></div>
    <div class="page">
        <header>
            <div class="logo1"><img src="../images/logo/foodstore.png" alt="logo"/></div>
            <p><i class="fas fa-map-marker-alt"></i> Dschang, Menoua</p>
            <p><a href="espaceadmin.php" style="border:solid cadetblue; padding:5px;">Espace Admin</a></p>

        </header>
        
        <section class="section1">
            <a href="#section3" class="btn">Liste des restaurants</a>            
        </section>

        <section class="section3">
            <h3 class="section3__title" id="section3">Restaurants</h3>
            <div class="carte">
               <?php foreach($restaurant as $resto): ?>

                <a href=""><figure>
                    <img src="../images/restaurants/<?= $resto['images']?>" alt="palettedugout"/>
                    <figcaption>
                        <div class="new">
                            <p>Vue</p>
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