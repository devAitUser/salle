<?php 


require_once("../db_connect.php");


$id = $_GET["id1"];



$req = $bdd->query("SELECT * FROM message WHERE id = '$id' ");
  while ($donnees2 = $req->fetch())
  {  
   
    $id_anonnce  = $donnees2["id_anonnce"];
    $id_user = $donnees2["id_user"];
    $date_reservation = $donnees2["date_reservation"];
    $date_fin_reservation = $donnees2["date_fin_reservation"];
  
}







$req = $bdd->prepare("INSERT INTO validation (id,id_anonnce,id_user,date_reservation,date_fin_reservation) VALUES (NULL, :id_anonnce,:id_user,:date_reservation,:date_fin_reservation)");
$req->execute(array(

    'id_anonnce' => $id_anonnce,
    'id_user' => $id_user,
    'date_reservation' => $date_reservation,
    'date_fin_reservation' => $date_fin_reservation, ));  


   $bdd->query("DELETE FROM message WHERE id = '$id' ");








  
  
  






?>