<?php

require 'fonction/functionsComplete.php';







?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/cssclient/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../images/logo/foodstore.png');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/logo/foodstore.png" alt="">
				</div>
				<form action="">
					<h3>Inscription client</h3>
					<div class="form-group">
						<input type="text" placeholder="Nom" class="form-control" name="nom">
						<input type="text" placeholder="Prenom" class="form-control" name="prenom">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Pseudo" class="form-control" name="pseudo">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Adresse email" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value=""  selected>Sexe</option>
							<option value="male">Masculin</option>
							<option value="femal">Feminin</option>
							<option value="other">Autres</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Mot de passe" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirmer mot de passe" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>S'inscrire
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>






