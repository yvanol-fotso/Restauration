<?php 
  function selectRestaurant($pdo){
    $req = $pdo->query('SELECT * FROM restaurant');
    return $req;
  }
?>