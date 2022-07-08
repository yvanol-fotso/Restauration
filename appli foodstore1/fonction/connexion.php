<?php 
   require_once 'bd.php';
   if(!empty($_POST)){
       $email = $_POST['email'];
       $req = $pdo->query("SELECT * FROM client WHERE email = $email");
       if(!isset($req)){
          $user = $req->fetchAll(PDO::FETCH_OBJ);
       }
    var_dump($user);
   }
  
?>
<div>
</div>