<?php

require '../fonction/functionsComplete.php';

    
    

	if(isset($_FILES['image']) && (!empty($_FILES)) && (!empty($_POST))){

	 $result = false;
    
     @$name = $_POST['nom'];	 
     @$addr = $_POST['adresse'];
     @$proprietaire = $_POST['proprietaire'];
     @$mail = $_POST['email'];
     @$service = $_POST['service'];
     @$autre = $_POST['others'];
     
     //traitement sur le champ images:
	 @$tmpPhoto = $_FILES['image']['tmp_name'];
	 @$photoName = $_FILES['image']['name'];
	 @$size =  $_FILES['image']['size'];
	 @$error = $_FILES['image']['error'];

	 //verification extension du fichier 
	 @$tabExtension = explode('.',$photoName);
	 @$extension = strtolower(end($tabExtension));

	 //tableau d'extension accepter
	 @$extensions = ['jpg','png','jpeg','gif'];
	 @$maxSize = 400000;

	  $result = addResto($name,$photoName,$addr,$proprietaire,$mail,$service,$autre);
	
		     if ($result) {
				# code...			
					
					header('Location:../index.php');
				    exit();
			 }

 //     if(in_array($extension,$extensions) && $size <= $maxSize && $error == 0){

	// 	// unicite du ficher uploader
	// 	@$unique =uniqid('',true);
	// 	@$photoName = $unique.".".$extension;
	
	// 	if (move_uploaded_file($tmpPhoto, './upload/'.$photoName)) {
	// 	     $result = addResto($name,$photoName,$addr,$proprietaire,$mail,$service,$autre);
	
	// 	     if ($result) {
	// 			# code...			
					
	// 				header('Location:../index.php');
	// 			    exit();
	// 		 }

	// 	}else {
	// 			# code...
	// 			// @$error = "une erreur s'est produit lors de l'ajout du restaurant";
	// 	}

	// 	}
	// }
	}	

	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ajouter restaurant</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../css/ajoutresto/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../images/logo/foodstore.png');">
			<div class="inner">
				<div class="image-holder">
					<img src="../images/logo/foodstore.png" alt="">
				</div>
				<form action="" method="POST" enctype="multipart/form-data"> 
					<h3>Ajouter un Restaurant</h>
					<div class="form-group">
						<input type="text" placeholder="Nom du restaurant" class="form-control" name="nom">
						<input type="text" placeholder="Adresse" class="form-control" name="adresse">
					</div>
					<div class="form-wrapper">
						<input type="file" placeholder="Images du restaurant" class="form-control" name="image">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Proprietaire" class="form-control" name="proprietaire">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Adresse email" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="service" id="" class="form-control">
							<option value=""  selected>Service reservation</option>
							<option value="yes">Disponible</option>
							<option value="no">Non disponible</option>
							
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Autres parametres" class="form-control" name="others">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<button>AJOUTER
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>