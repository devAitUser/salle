<?php 


require_once("../db_connect.php");


$image1   = $_GET["image"];

 
$path = strstr($image1, 'fakepath');
$REMP = 'fakepath\1';

$remove = str_replace( '1', '',   $REMP);

$image = str_replace(  $remove , '',  $path);





$titre1   =  $_GET["titre"];
$image1   = $_GET["image"];
$description1   = $_GET["description"];
$prix =  $_GET["prix"] ;
$date11 = date('Y-m-d H:m:s'); 


$req = $bdd->prepare("INSERT INTO annonces(id, id_user, titre, image, description, date_anonnces, date_debut, date_fin, prix1) VALUES (NULL,NULL,:titre,:image,:description,:date_anonnces,NULL,NULL,:prix1)");
$req->execute(array(
    'titre' => $titre1 ,
    'image' => $image,
    'description' => $description1,
    'date_anonnces' => $date11,
    'prix1' => $prix ));  

    echo 'ok';





  
  
  






?>