<?php
      require("connect_bd.php");

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $db->prepare("SELECT * FROM inscription WHERE mail1 = ? AND mdp1 = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['ident'] = $userinfo['ident'];
         $_SESSION['mail1'] = $userinfo['mail1'];
         header("Location: profil.php?id=".$_SESSION['id']);
        // header("Location: profil.php?id=".$_SESSION['id']);

      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fr.css">
        <title>connexion</title>
    </head>
    <body>
        <div class="bgroung">
            <fieldset class="englobe">
            <!-- Icon -->
            <div class="fadeIn_first">
                <img src="imgs/user_image2.jpg" id="icon" alt="User Icon" width="300" height="300" />
            </div>
            <!-- formulaire -->
            <div class="milieu">
                <form method="POST" action="">
                    <input type="email" name="mailconnect" placeholder="E-MAIL"><br>
                    <input type="password" name="mdpconnect"  placeholder="PASSWORD"/>
                    <br><br>
                    <input type="submit" name="formconnexion" value="Se connecter !" /><br>
                    <br>
                    <div class="inscrire">
                        <a href="inscription.php">S'inscrire</a><br>
                    </div>
                    <div class="passwordfroget">
                        <a href="passwordfroget.php">Mot de passe oublier</a>
                    </div>

                </form>
            </div>
            <br><br>
            <?php
            if(isset($erreur)) {
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </fieldset>
          
    </body>
</html>