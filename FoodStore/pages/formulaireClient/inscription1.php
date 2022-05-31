<?php


if(isset($_POST['form_step1'])){

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $sex = htmlspecialchars($_POST['sex']);
    $mdpinscription1 = sha1($_POST['mdpinscription1']);
    $mdpinscription2 = sha1($_POST['mdpinscription2']);

    $name=strlen($nom);
    $name1=strlen($prenom);
    $name2=strlen($pseudo);

    if (preg_match("#^[a-zA-Z]{5,}$#",$_POST['nom'])){

        if(preg_match("#^[a-zA-Z]{5,}$#",$_POST['prenom'])){
            
            if(preg_match("#^[a-zA-Z]{5,}$#",$_POST['pseudo'])){
                if ($name<=40){
                    if ($name1<=40){
                        if ($name2<=40){

                            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
                    
                                if(filter_var($mail1, FILTER_VALIDATE_EMAIL)){
                                   
                                    $reqmail = $db->prepare("SELECT *FROM inscription WHERE email = ?");
                                    $reqmail->execute(array($email));
                                    $mailexist = $reqmail->rowCount();
            
                                    if($mailexist == 0){
                                        
                                        if($mdpinscription2 == $mdpinscription2){
                                            $tableau= $db->prepare("INSERT INTO inscription(nom,prenom,pseudo,email,sex,mdpinscription2) VALUES(?,?,?,?,?,?,?,?,?)");
                                            $tableau->execute(array($nom,$prenom,$pseudo,$email,$sex,$mdpinscription2));
                                            $connection = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                                        }
                                    }else{
            
                                    }
                                }else{
            
                                }
                            }else{
            
                            }
                        }else{
            
                        }

                        }else{
                            
                        }
                    }else{
                        
                    }
                }else{

                }
                
        }else{

        }
    }else{

    }
}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/foodstore.png');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/foodstore.png" alt="">
				</div>
                
				<form action="" methode="post">
					<h3>Inscription client</h3>
					<div class="form-group">
						<input type="text" name="nom" placeholder="Nom" class="form-control">
						<input type="text" name="prenom" placeholder="Prenom" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="pseudo" placeholder="Pseudo" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Adresse email" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="sex" id="" class="form-control">
							<option value=""  selected>Sexe</option>
							<option value="male">Masculin</option>
							<option value="femal">Feminin</option>
							<option value="other">Autres</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="mdpinscription1" placeholder="Mot de passe" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="mdpinscription2" placeholder="Confirmer mot de passe" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button name="form_step1">S'inscrire
						<i class="zmdi zmdi-arrow-right" ></i>
					</button>
                    <!--<input type="submit" value="S'inscrire" name="form_step1">-->
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>