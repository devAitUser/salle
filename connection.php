<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Atlantis &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



  <!-- START: header -->

  
  <?php 
  
  require_once("function.php");
  


  echo affiche('index_link');
  
  
  
  ?>

<?php // on teste si le visiteur a soumis le formulaire de connexion
require_once("db_connect.php");
if(isset($_POST['connexion'])){
if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
	$email = $_POST['email'];
	$pass= $_POST['pass'];

	
	

	//  Récupération de l'utilisateur et de son pass hashé
	$req = $bdd->prepare('SELECT * FROM user WHERE email = :email');
	$req->execute(array(
		'email' => $email));
	$resultat = $req->fetch();
	
	// Comparaison du pass envoyé via le formulaire avec la base
	$isPasswordCorrect = password_verify($pass, $resultat['pass']);

	
	if (!$resultat)
	{
		echo " <script>alert('Mauvais identifiant ou mot de passe !')</script>";
	}
	else
	{
		if ($isPasswordCorrect) {
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['pseudo'] = $email;
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
			echo 'Vous êtes connecté !';
			
			
			echo '<script>window.location=\'index.php\';</script>';
			
		}
		else {
			echo " <script>alert('Mauvais identifiant ou mot de passe !')</script>"; 
		}
	}





	
  }

}

if(isset($test)){
	header("Location: index.php");

}



?>
 

 <div class="container-login100">
			<div  class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form method="post" action="" class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						connection
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
			
						<input class="login100-form-btn" style="color: rgb(0, 0, 0);" name="connexion" value="Connexion" type="submit">
						
					</div>

				

				</form>
			</div>
		</div>

  <?php require_once("footer.php");   ?>

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>


  </body>
</html>