<?php 


require_once("../db_connect.php");



$id_annonce= $_GET["id_anonnce"];
$id_user= $_GET["id_user"];
$date_debut= $_GET["date_debut"];
$date_fin= $_GET["date_fin"];
$message= $_GET["message"];



if(empty($date_debut)){
  
    echo "erreur_date_debut";
    exit;
}

if(empty($date_fin)){
  
    echo "erreur_date_fin";
    exit;
}



$req = $bdd->prepare("INSERT INTO message (id, id_anonnce, id_user, date_reservation, date_fin_reservation, message_a) VALUES (NULL, :id_anonnce, :id_user, :date_reservation, :date_fin_reservation, :message_a)");
$req->execute(array(
    'id_anonnce' => $id_annonce,
    'id_user' => $id_user,
    'date_reservation' => $date_debut,
    'date_fin_reservation' => $date_fin,
    'message_a' => $message));  

    echo "ok";








  
  
  






?>