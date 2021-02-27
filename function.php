
<?php 




 session_start();
  function is_loggedin(){
   
   
    if(!empty($_SESSION['pseudo']))
		{
			return true;
		}else{
      return false;
    }
  } 
  

 function affiche($value){
    $active_link_room = "";
    $active_link_reservation ="";
    $active_link_index ="";
    $active_link_contact ="";
    $active_link_blog ="";
    $active_link_about ="";

    switch ( $value ) {

      case 'room_link':
        $active_link_room = 'active';
        break;
        case 'reservation_link':
        $active_link_reservation = 'active';
        break;
        case 'index_link':
        $active_link_index = 'active';
        break;
        case 'contact_link':
        $active_link_contact= 'active';
        break;
        case 'blog_link':
        $active_link_blog= 'active';
        break;
        case 'about_link':
        $active_link_about= 'active';
        break;
   
     }
     if(is_loggedin()){

      require_once("class_user.php");
  
 
       
      $USER = new user();

      $user = $USER->nom;
      $user_name = $USER->prenom;

      
 

  


    echo '<div class="blok-header"><div class="zone">
    <div class="blk-right"><a href="deconnection.php" class="" role="button"><i class="icon-switch2"></i>  Deconnection</a></div>
    <div class="blk-left">Bonjour '.$user.' '.$user_name .'</div>
    </div></div>';
     }



   echo '<header role="banner" class="probootstrap-header">
   <!-- <div class="container"> -->
   <div class="row">
       <a href="index.php" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
       
       <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
       <div class="mobile-menu-overlay"></div>

       <nav role="navigation" class="probootstrap-nav hidden-xs">
         <ul class="probootstrap-main-nav">
           <li class="'.$active_link_index.'"><a href="index.php">Acceuil</a></li>
         
           <li class="'.$active_link_room.'"><a href="rooms.php">Tous les salles</a></li>
           <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
         
           <li class="'.$active_link_about.'"><a href="blog.php">Blog</a></li>
           <li class="'.$active_link_contact.'"><a href="contact.php">Contact</a></li>';
          
           

           if(!(is_loggedin())){
            echo ' <li> <a href="connection.php" class="btn btn-primary btn-login" role="button">Connection</a></li>';
            echo ' <li> <a href="inscription.php" class="btn btn-primary btn-login" role="button">Inscription</a></li>';
          }else {
            echo ' <li> <a href="profil.php" class="btn btn-primary btn-login" role="button">Profile</a></li>';
          }

          

         


         
         
         echo '</ul>
        
     
         <div class="extra-text visible-xs">
           <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
           <h5>Connect With Us</h5>
           <ul class="social-buttons">
             <li><a href="#"><i class="icon-twitter"></i></a></li>
             <li><a href="#"><i class="icon-facebook2"></i></a></li>
             <li><a href="#"><i class="icon-instagram2"></i></a></li>
           </ul>
           
         </div>
       </nav>

      

       </div>
   <!-- </div> -->
 </header>';
  }


  function get_anonces_deux(){
    require_once("db_connect.php");

    $req = $bdd->query('SELECT * FROM annonces ORDER BY date_anonnces  DESC LIMIT 2');

   while ($donnees = $req->fetch())
    {

    echo '<div class="col-md-6">
    <div class="probootstrap-block-image-text">
      <figure>
        <a  href="single.php?id='.$donnees['id'].'" class="image-popup">
          <img src="img/img_1.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
        </a>
        <div class="actions">
          <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
        </div>
      </figure>
      <div class="text">
        <h3><a href="#">'.$donnees['titre'].'</a></h3>
        <div class="post-meta">
          <ul>
            <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
            <li><i class="icon-user2"></i> 3 Guests</li>
          </ul>
        </div>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <p><a  href="single.php?id='.$donnees['id'].'" class="btn btn-primary">reserver pour '.$donnees['prix1'].' MAD /Jour</a></p>
      </div>
    </div>
  </div>';



     }

  $req->closeCursor();

}



function get_more_room(){
  require_once("db_connect3.php");

  $req = $bdd->query('SELECT * FROM annonces ORDER BY date_anonnces  DESC LIMIT 5');

 while ($donnees = $req->fetch())
  {
    
  echo '<div class="item">
  <div class="probootstrap-room">
  <a href="single.php?id='.$donnees['id'].'"><img src="img/img_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
    <div class="text">
      <h3>'.$donnees['titre'].'</h3>
      <p> <strong>'.$donnees['prix1'].'/DHS</strong></p>
      <div class="post-meta">
        <ul>
          <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
          <li><i class="icon-user2"></i> 3 Guests</li>
        </ul>
        </div>
    </div>
  </div>
</div>';



   }

$req->closeCursor();

}



function get_all_anonnces(){
  require_once("db_connect.php");

  $req = $bdd->query('SELECT * FROM annonces ORDER BY date_anonnces  DESC ');

 while ($donnees = $req->fetch())
  {

  echo '<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="probootstrap-room">
    <a href="#"><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
    <div class="text">
      <h3>'.$donnees['titre'].'</h3>
      <p>Starting from <strong>$29.00/Night</strong></p>
      <div class="post-meta mb30">
        <ul>
          <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
          <li><i class="icon-user2"></i> 3 Guests</li>
        </ul>
      </div>
      <p><a href="/salle/single.php?id='.$donnees['id'].'" class="btn btn-primary" role="button">Reserver pour '.$donnees['prix1'].' MAD</a></p>
    </div>
  </div>
</div>';



   }

$req->closeCursor();

}

function update_data_user(){
  require_once("db_connect.php");
        

  $user_id = $_SESSION['id'];
     $user_id = $_SESSION['id'];
     $nom =$_POST["nom"];
     $prenom = $_POST["prenom"];
     $email = $_POST["email"];
     $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

     $bdd->exec("UPDATE user SET nom = '$nom', prenom = '$prenom', email = '$email', pass = '$pass_hache'  WHERE id = '$user_id'");
     $http="profil.php ";
     header("Location: $http");
     

}

function get_data_user(){

  require_once("db_connect.php");

   $_id = $_SESSION['id'];
  $req = $bdd->query("SELECT * FROM user WHERE id = '$_id' ");

 
 while ($donnees2 = $req->fetch())
  {  
    $email= $donnees2["email"];
    $nom  = $donnees2["nom"];
    $prenom  = $donnees2["prenom"];
  }

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




function reservation_user(){

  require_once("db_connect.php");


  


   
  $req = $bdd->query("SELECT * FROM message ");

  $arry =$req->fetch();

 
 
  

  echo '<h2 class="mt0">Liste des demandes de reservation</h2><div class="col-md-12 invoice_unit_title">
  <div class="col-md-1">
      <strong> id</strong> 
  </div>

  <div class="col-md-2"></div>

  <div class="col-md-3">
       <strong> Nom prenom</strong> 
  </div>

  <div class="col-md-3">
      <strong> date reservation</strong> 
  </div>

  <div class="col-md-3">
      <strong> date fin reservation</strong> 
  </div>

 

</div>';
  

if (empty($arry["id"])){
    echo "<div class='no_invoices'>il n'est pas aucun demande pour le moment</div>";
} else{
  echo '<div id="container-invoices">';
  $req = $bdd->query("SELECT * FROM message ");
  while ($donnees2 = $req->fetch())
  {  
    $id= $donnees2["id"];
    $id_anonnce  = $donnees2["id_anonnce"];
    $id_user = $donnees2["id_user"];
    $date_reservation = $donnees2["date_reservation"];
    $date_fin_reservation= $donnees2["date_fin_reservation"];
    $message_a  = $donnees2["message_a"];

    $req1 = $bdd->query("SELECT * FROM user WHERE id='$id_user' ");

    $arruser = $req1->fetch();
  

   echo'
<div class="col-md-12 invoice_unit " >
   <div class="col-md-1">
       '.$id.'
   </div>
   <div class="col-md-2 flex"> <a href="#" class="activer">Activer</a> <input type="hidden" value="'.$id.'">  
   
   <a href="#" class="supprimer">supprimer</a> <input type="hidden" value="'.$id.'">  
   </div>
   
   <div class="col-md-3">
       '.$arruser["nom"].' '.$arruser["prenom"].'
   </div>
   

   
   <div class="col-md-3">
         '.$date_reservation.'    </div>
   
   <div class="col-md-3">
   '.$date_fin_reservation.'     
   </div>
 

</div>
';
  }
  echo '</div>';

}



}



 function demande_reservation(){
  require_once("db_connect3.php");
  $id =$_GET["id"];
  $req = $bdd->query("SELECT * FROM validation WHERE id_anonnce ='$id'");
  $result = $req->fetch();
  $data = $result["id"];
  if(empty($data )){
  echo '
  <div class="wpestate_property_description  pt-3">
  <div class="col-md-12">
  <h3 class="mt0">Demande de reservation</h3>
  <div class="panel_">
  </div>
  <form action="#" method="post" class="probootstrap-form">
 
  <div  class="message_erreur">

     </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="fname">date debut</label>
          <input type="date" class="form-control" id="date_debut" name="fname">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="lname">date fin</label>
          <input type="date" class="form-control" id="date_fin" name="lname">
        </div>
      </div>
    </div>
   
    <input type="hidden" class="btn btn-primary btn-lg" id="v_id"  value="'.$id.'">
    <div class="form-group">
      <label for="message">Message</label>
      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
    </div>
    <div class="form-group">

      <input type="button" class="btn btn-primary btn-lg" id="submit1"  value="Send Message">
    </div>
  </form>
</div></div>';
}
}

function check_reservation(){
  require_once("db_connect2.php");
  $id =$_GET["id"];
	$req = $bdd->query("SELECT * FROM validation WHERE id_anonnce ='$id'");
	while ($donnees = $req->fetch())
	{  
	  $id_v        = $donnees["id"];
	  $date_reservation        = $donnees["date_reservation"];
	  $date_fin_reservation       = $donnees["date_fin_reservation"];
	  $id_user       = $donnees["id_user"];


  }

  



    if(empty( $id_v )){
  echo ' <h4 class="panel-title">Statut  <span class="label-dispo">disponible</span></h4>  ';}

  


   if(!empty( $id_v )){
    $re = $bdd->query("SELECT * FROM user WHERE id ='$id_user'");
    $info_user = $re->fetch();

     echo '<div class="row"><div class="col-md-6"> <h4 class="panel-title">Statut  <span class="label-rese">reserver</span></h4>  </div>
      <div class="col-md-6"></div> <span class="label-user">Par l utilisateur '.$info_user["nom"].' '.$info_user["prenom"].' </span> </div>';
  echo'<div class="row">
  <div class="col-md-6">
  Date de reservation :
   </div>
   <div class="col-md-6">
   Date d expiré la reservation :
   </div>


  
   
   <div class="col-md-6">
    '. $date_reservation .'
   </div>
   <div class="col-md-6">
    '.$date_fin_reservation .'
   </div>

        
   

</div>';



      }
  


   }


   function menu_user(){

    echo '  <div class="user_dashboard_links">
    <a href="profil.php" class="user_tab_active"><i class="fa fa-cog"></i> Mon Profile</a>';

    require_once("class_user.php");

    $user = new user();

     $user_role= $user->role;

    if($user_role == 'admin'){
        echo'    <a href="PASSER_RESERVATION.php" class=""> <i class="fa fa-map-marker"></i>passer un reservation</a>
            <a href="all_room.php" class=""> <i class="fa fa-plus"></i>Tout les Salles</a>  
            <a href="add_room.php" class=""> <i class="fa fa-plus"></i>Ajouter une salle</a>  '; }else{


            echo '<a href="salle_reserver.php" class=""> <i class="fa fa-plus"></i>Mes reservations</a>  ';  }




echo '<a href="deconnection.php" title="Logout"><i class="fa fa-power-off"></i> Deconnection</a>
</div>';
  }



  
function all_room(){

  require_once("db_connect.php");


  





  echo '<h2 class="mt0">Tous les Salles </h2><div class="col-md-12 invoice_unit_title">
  <div class="col-md-3">
      <strong> Titre</strong> 
  </div>

  <div class="col-md-3"> </div>

  <div class="col-md-3">
       <strong>Image</strong> 
  </div>

  <div class="col-md-3">
      <strong> ¨Prix</strong> 
  </div>

 

 

</div>';
  


  echo '<div id="container-invoices">';
  $req = $bdd->query("SELECT * FROM annonces ");
  while ($donnees2 = $req->fetch())
  {  
    $id= $donnees2["id"];
    $titre = $donnees2["titre"];
    $image = $donnees2["image"];
    $prix = $donnees2["prix1"];
  

  
  

   echo'
<div class="col-md-12 invoice_unit " >
 
   <div class="col-md-3"> <a href="#" class="activer">'.$titre.'</a> <input type="hidden" value="'.$id.'">  </div>
   
   <div class="col-md-3">
    <a href="/salle/update_room.php?id='.$id.'" > Modifier </a>
    <a   class="delete_room" >  Supprimer </a>
    <input type="hidden" value="'.$id.'">
    
   </div>


   <div class="col-md-3">
   <img id="profile-image" src="/salle/img/annonces/'.$image.'" > 
   </div>
   

   
   <div class="col-md-3">
         '.$prix.'    </div>
   
 
 

</div>
';
 
  

}



}

function add_room(){


echo '<form action="#" method="post" class="probootstrap-form" onsubmit="return myFunction();">
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="fname">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre" value="">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="lname">Image</label>
      <form method="post" action="" enctype="multipart/form-data" id="myform">
      <div class="preview">
          <img src="" id="img" width="100" height="100">
      </div>
      <div >
          <input class="form-control" type="file" id="file" name="file" />
     
      </div>
  </form>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="email">Description</label>
  <div class="form-field">
  
    <textarea  class="form-control" id="description" name="description"  value=""></textarea>
  </div>
</div>



<div class="row mb30">
  <div class="col-md-6">
    <div class="form-group">
      <label for="adults">Prix</label>
      <div class="form-field">
      <input type="number" class="form-control" id="prix" name="prix" >
      </div>
    </div>
  </div>
 
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyer">
</div>
</form>';






}


function update_room(){
  $id =$_GET["id"];
  require_once("class_anonnce.php");
  $anonnce2 = new anonnce();

  echo '<form action="#" method="post" class="probootstrap-form" onsubmit="return myFunction();">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="fname">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" value="'. $anonnce2->titre.'">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="lname">Image</label>
        <form method="post" action="" enctype="multipart/form-data" id="myform">
        <div class="preview update">
            <img src="http://localhost/salle/img/annonces/'. $anonnce2->img.'" id="img" width="100" height="100">
        </div>
        <div >
            <input class="form-control" type="file" id="file" name="file" />
            <input type="hidden" id="img_val" value="'.$anonnce2->img.'">
            <input type="hidden" id="id_room" value="'. $id.'">
       
        </div>
    </form>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Description</label>
    <div class="form-field">
    
      <textarea  class="form-control" id="description" name="description"  value="">'. $anonnce2->description.'</textarea>
    </div>
  </div>
  
  
  
  <div class="row mb30">
    <div class="col-md-6">
      <div class="form-group">
        <label for="adults">Prix</label>
        <div class="form-field">
        <input type="number" class="form-control" id="prix" name="prix" value="'. $anonnce2->prix.'" >
        </div>
      </div>
    </div>
   
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary btn-lg" id="update_room" name="submit" value="Envoyer">
  </div>
  </form>';
  
     

}


function all_reservetion_user(){

  require_once("db_connect.php");


  





  echo '<h2 class="mt0">Tous les Salles </h2><div class="col-md-12 invoice_unit_title">
  <div class="col-md-3">
      <strong> Nom de salle</strong> 
  </div>

  <div class="col-md-3"> </div>

  <div class="col-md-3">
       <strong>date reservation</strong> 
  </div>

  <div class="col-md-3">
      <strong> date fin reservation</strong> 
  </div>

 

 

</div>';
  
$_id = $_SESSION['id'];
$req = $bdd->query("SELECT * FROM user WHERE id = '$_id' ");

  echo '<div id="container-invoices">';
  $req = $bdd->query("SELECT * FROM validation WHERE id_user = '$_id' ");
  while ($donnees2 = $req->fetch())
  {  
    $id= $donnees2["id_anonnce"];
    $date_reservation = $donnees2["date_reservation"];
    $date_fin = $donnees2["date_fin_reservation"];
  

    $req2 = $bdd->query("SELECT * FROM annonces WHERE id = '$id' ");

    while ($donnees3 = $req2->fetch()){

       $titre_anonnce= $donnees3["titre"];
    }
  

  
  

   echo'
<div class="col-md-12 invoice_unit " >
 
   <div class="col-md-3"> '.  $titre_anonnce.' </div>
   
   <div class="col-md-3">

    
   </div>


   <div class="col-md-3">
'.$date_reservation.'
   </div>
   

   
   <div class="col-md-3">
         '. $date_fin.'    </div>
   
 
 

</div>
';
 
  

}



}










?>