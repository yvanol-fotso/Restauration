<?php
      

if(isset($_POST['connexion_administrateur'])) {
   $username = htmlspecialchars($_POST['username']);
   $password1 = sha1($_POST['password1']);
   if(!empty($username) AND !empty($password1)) {
      $requser = $db->prepare("SELECT * FROM inscription WHERE username = ? AND password1 = ?");
      $requser->execute(array($username, $password1));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: profil.php?pseudo=".$_SESSION['pseudo']);
        // header("Location: profil.php?id=".$_SESSION['id']);

      } else {
         $erreur = "Mauvais pseudo ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>


<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./css/cssform.css">
    </head>
    <body>
      <div class="wrapper" style="background-image: url('formulaireClient/images/foodstore.png');">
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>EspaceAdmin</h1>
                
                <label><b>Nom Administrateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password1" required>

                <input type="submit" id='submit' value='SE CONNECTER'  name="connexion_administrateur">
               <!--  <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?> -->
            </form>
        </div>
      </div>
    </body>
</html>