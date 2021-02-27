<?php // on teste si le visiteur a soumis le formulaire de connexion


class anonnce{
   public $id_a  ;
   public $id_v  ;

   public $titre ='' ;


   public $img = '' ;

   public $description ='';

   public $date_debut ;

   public $date_fin ;

   public $prix ;

   public $date_reservation;
   
   public $date_fin_reservation ;

   public $id_user;


   public function __construct(){
	require_once("db_connect.php");
	$id =$_GET["id"];
	$http ='index.php';
   
	if(empty($id)){
		header("Location: $http");
	}


	$req = $bdd->query("SELECT * FROM annonces WHERE id ='$id'");



	while ($donnees1 = $req->fetch())
	{  
	  $this->id_a         = $donnees1["id"];
	  $this->titre        = $donnees1["titre"];
	  $this->img          = $donnees1["image"];
	  $this->description  = $donnees1["description"];
	  $this->prix  = $donnees1["prix1"];

	}
    

   }


   




}



?>
 

 