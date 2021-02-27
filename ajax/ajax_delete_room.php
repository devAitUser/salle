<?php 


require_once("../db_connect.php");


$id = $_GET["id"];


$bdd->query("DELETE FROM annonces WHERE id = '$id' ");





  
  
  






?>