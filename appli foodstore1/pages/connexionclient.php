<?php

require '../fonction/functionsComplete.php';

     @$username = $_POST["username"];
     @$pass = $_POST["password"];

     if (logClient($username, $pass)) {
         header("Location:../index.php");
     }
   

?>

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../css/css/cssform.css">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
              
            </form>
        </div>
    </body>
</html>