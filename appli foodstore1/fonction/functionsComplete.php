<?php

    function logInAdmin($username, $password) {
        $connect = startConnection();
        $query = $connect->query("SELECT * FROM admins WHERE nom='$username' AND passwd='$password'");
        if($query->rowCount() > 0) {
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

     function logClient($username, $password) {
        $connect = startConnection();
        $query = $connect->query("SELECT * FROM client WHERE pseudo='$username' AND passwd='$password' ");

        if($query->rowCount() > 0) {
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

    //fonction de connexion a pdo et a la base de donnees
    function startConnection()
    {
        // parametres de connexion
        $hostname = "localhost"; 
        $username = "root";       
        $password = "";     
        $database = "uv_projet";  
        
        try{

            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=$database;user=$username;password=$password' array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $pdo=new PDO("mysql:host=localhost;dbname=uv_projet","root","");
        
        }catch(Exception $e){
                       die('Erreur :' .$e->getMessage());
        }

        return $pdo;
    }
    
    //fonction de deconnexion de mysqli
    function stopConnection($con)
    {
        $con->close();
    }
        

    //fonction de verification de connexion
    function isLogged()
    {
        return isset($_SESSION['username']);
    }


    //fonction de suppression du restaurant
    function deleteRestau($restoId)
    {
        //appel de la fonction de connexion
        $connect = startConnection();
        $query = $connect->query("DELETE FROM restaurant WHERE id =$restoId") or die("Erreur lors de la suppression du restaurant");
        // stopConnection($connect);
        return true;
    }


    //fonction d'affichage des restaurant
    function getAllresto()
    {
        $connect = startConnection();
        //recherche des resto  dans la base de donnees
        $query = $connect->query("SELECT * FROM restaurant");
        if($query->rowCount() > 0) //verifiation que le resto existe        
        {
            // stopConnection($connect);
            // return $query->fetch_all(MYSQLI_ASSOC);
            return $query->fetchALL(PDO::FETCH_ASSOC);
        }
        // stopConnection($connect);
        return array();
    }

    //recherche
    function getResto($restoId){
        $connect = startConnection();
        //recherche du resto dans la base de donnees
        $query = $connect->query("SELECT * FROM restaurant WHERE id=$restoId");
        if($query->rowCount() > 0) //verifiation que le resto existe        
        {
            stopConnection($connect);
            return $query->fetch_assoc();
        }
        stopConnection($connect);
        return null;
    }


    function addResto($username,$images,$addresse,$owner,$email,$services,$others)
     {
        //appel de la fonction de connexion
        $connect = startConnection();
       
        //enregistrement du resto dans la base de donnees
        $query = $connect->query("INSERT INTO restaurant (nom,images, adresse, proprietaire,email,services,autre) VALUES('$username','$images','$addresse','$owner','$email','$services','$others')") or die("Erreur lors de l'ajout du restaurant");
        // stopConnection($connect);
        return true;
     }


     function addResto1($username,$images,$addresse,$owner,$email,$services,$others)
     {
        //appel de la fonction de connexion
        $connect = startConnection();
       
        //enregistrement du resto dans la base de donnees
        $query = $connect->prepare("INSERT INTO restaurant (nom,images, adresse, proprietaire,email,services,autre) VALUES(?,?,?,?,?,?,?)") or die("Erreur lors de l'ajout du restaurant");
        $query->execute(['nom'=>$username,'images'=>$images,'adresse'=>$addresse,'proprietaire'=>$owner,'email'=>$email,'services'=>$services,'autre'=>$others]);
        // stopConnection($connect);
        return true;
     }


     //fonction de modification d'un restaurant
     function updateResto($restoName,$images,$addresse,$owner,$email,$services,$others)
     {
        //appel de la fonction de connexion
        $connect = startConnection();
 
        //modification dans la base de donnees
        $query = $connect->query("UPDATE restaurant SET nom='$restoName', images='$images', adresse='$addresse', proprietaire='$owner',email='$email',services='$services',autre='$others' WHERE AUTO_ID=$autoId") or die("Erreur lors de la mise à jour du restaurant");
        stopConnection($connect);
        return true;
     }



    
    function verifyAddResto() {
        $errors = array();

        $required = ['nom','adresse', 'proprietaire','email',
             'service','others'
            ];


        foreach ($required as $field) {
            if (!isset($_POST[$field]) || strlen($_POST[$field]) == 0)
                $errors[] = $defaults[$field] . ' is required!';
            else
                $values[$field] = $_POST[$field];
        }

        if(count($errors) == 0) {
            
            if(strlen($_POST['nom']) < 4)
                $errors[] = 'Name must be more than 3 characters!';

            if(strlen($_POST['adresse']) < 4)
                $errors[] = 'Adresse must be more than 3 characters!'; 
            
            if(strlen($_POST['email']) < 4)
                $errors[] = 'Email must be more than 3 characters!';              

        }

        return $errors;
    }
 
?>