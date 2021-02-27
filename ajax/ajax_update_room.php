<?php 


require_once("../db_connect.php");


$image1   = $_GET["image"];

 
$path = strstr($image1, 'fakepath');
$REMP = 'fakepath\1';

$remove = str_replace( '1', '',   $REMP);

$image = str_replace(  $remove , '',  $path);

$old_img =  $_GET["img_val"];

if(!empty($image)){

$new_img = $image;

}else{
    $new_img = $old_img;  
}


$id_room =   $_GET["id_room"];

$titre1   =  $_GET["titre"];
$image1   = $_GET["image"];
$description1   = $_GET["description"];
$prix =  $_GET["prix"] ;
$date11 = date('Y-m-d H:m:s'); 

$bdd->exec("UPDATE annonces SET titre = '$titre1 ', image = '$new_img', description = '$description1', date_anonnces = '$date11' , prix1 = '$prix' WHERE id = '$id_room'");


    echo 'ok';





  
  
  






?>