<?php 


require_once("../db_connect.php");


$id = "1";



$req = $bdd->query("SELECT * FROM validation WHERE 	id_user = '$id' ");

$data = $req->fetch();

$date_fin_reservation = $data["date_fin_reservation"];
$date_now = date('Y-m-d'); 


if(!empty($date_fin_reservation)){

if($date_now > $date_fin_reservation){
  $bdd->query("DELETE FROM validation WHERE id_user = '$id' ");
  echo "ok";
}
  
}







  
  
  






?>