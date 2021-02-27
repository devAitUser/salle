<?php 


class user{
   public $id_a  ;

   public $nom ='' ;


   public $prenom = '' ;

   public $email ='';

   public $role  ;


   public function __construct(){
	
	$host ="localhost";
	$login ="root";
	$pass ="";
	$db_name="reservation";
   
	$bdd = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $login,  $pass);

	require_once("function.php");

	if(is_loggedin()){

	

	$_id = $_SESSION['id'];
     
	$req = $bdd->query("SELECT * FROM user WHERE id = '$_id' ");
  
   
   while ($donnees2 = $req->fetch())
	{  
	  $this->id_a= $donnees2["id"];
	  $this->email= $donnees2["email"];
	  $this->nom  = $donnees2["nom"];
	  $this->prenom  = $donnees2["prenom"];
	  $this->role =  $donnees2["role"];
	}

   }


   }

   public function get_data_user(){



	echo '<h2 class="mt0">modifier votre Profil</h2>
	<form action="#" method="post" class="probootstrap-form" onsubmit="return myFunction();">
	  <div class="row">
		<div class="col-md-6">
		  <div class="form-group">
			<label for="fname">Prenom</label>
			<input type="text" class="form-control" id="PRENOM" name="prenom" value="'.$prenom.'">
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="form-group">
			<label for="lname">Nom</label>
			<input type="text" class="form-control" id="nom" name="nom" value="'.$nom.'">
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<label for="email">Email</label>
		<div class="form-field">
		  <i class="icon icon-mail"></i>
		  <input type="email" class="form-control" id="email" name="email" value="'.$email.'" >
		</div>
	  </div>
	 
	 
  
	  <div class="row mb30">
		<div class="col-md-6">
		  <div class="form-group">
			<label for="adults">mot de pass</label>
			<div class="form-field">
			<input type="Password" class="form-control" id="pass" name="pass">
			</div>
		  </div>
		</div>
	   
	  </div>
	  <div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyer">
	  </div>
	</form>';
  


   }




}



?>
 

 