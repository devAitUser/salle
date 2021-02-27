<?php // on teste si le visiteur a soumis le formulaire de connexion


class get_anonnce{
   public $id_a  ;

   public $id_anonnce ='' ;


   public $id_user = '' ;

   public $date_reservation ='';

   public $date_fin_reservation ;


   public $message_a;
   



   public function __construct($id){
      require_once("db_connect2.php");
      $req = $bdd->query("SELECT * FROM message WHERE id ='$id'");

	 
    
  
   

   while ($donnees1 = $req->fetch())
	{  
	  $this->id_a         = $donnees1["id"];
	  $this->id_anonnce        = $donnees1["id_anonnce"];
	  $this->id_user          = $donnees1["id_user"];
	  $this->date_reservation  = $donnees1["date_reservation"];
     $this->date_fin_reservation        = $donnees1["date_fin_reservation"];
     $this->message_a         = $donnees1["message_a"];

   }
   


}




}



?>
 

 