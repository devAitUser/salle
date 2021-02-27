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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/function.js"></script>
    <script src="js/script_delete.js"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  <?php 
  require_once("function.php");
  
  require_once("class_anonnce.php");
  require_once("class_user.php");
  
  
  $anonnce = new anonnce();
  $user = new user();



  echo affiche('about_link');
  

   
  
  
  
  
  ?>
 
  
  


  <section class="section ">
  <div id="carousel-property-page-header" class="carousel slide propery_listing_main_image" data-interval="false" data-ride="carousel">
  <div class="propery_listing_main_image lightbox_trigger" style="background-image:url(http://localhost/salle/img/annonces/<?php  echo $anonnce->img ?>)" data-slider-no="1">
  </div>
  </div>
  </section>
  
  <section class="probootstrap-section probootstrap-section-dark">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
    
    <div class="box-title">

       <h1 class="entry-title entry-prop"><?php  echo $anonnce->titre ?></h1>
       <span class="price_area"> <?php  echo $anonnce->prix ?> MAD / jour</span>
    </div>

    <div class="wpestate_property_description">
        <h4 class="panel-title">Description</h4>Véritable écrin de verdure, de luxe et de pure élégance,the Lion of Real Estate , notre Agence Immobilière de Luxe, vous suggère cette Splendide Villa en Location court Durée à Marrakech, dans un emplacement d´exception sur la route d´Amizmiz qui vous plonge dès les premiers kilomètres dans les grandes plaines avec une variété de paysages très attractifs et une diversité de jeu intéressant dans les meilleurs parcours de Golfs de la ville.

La propriété dispose d´un espace de Réception et de piéce de vie très bien agencé offrant trois salons /séjours et une magnifique salle à manger, soigneusement décorés avec du mobilier haut de gamme de style Art- déco, 6 spacieuses chambres avec leurs salle de bain privatives, un Bureau, une salle de Cinéma, un Hammam BELDI et une cuisine résolument moderne entièrement équipée.

A l´extérieur de cette Luxueuse Villa à louer, vous trouverez un jardin magnifiquement arboré, un pool house indépendant avec une chambre de service avec sa salle de bain, une belle piscine et plusieurs espaces de salon et de salle à manger ombragés ainsi que d´autres prestations que nos conseillers seront ravis de vous présenter lors de votre visite.<div class="property_energy_saving_info">
    
		</div>


    


  </div>

  <div class="wpestate_property_description  pt-3">
       
        <?php check_reservation();   ?>
    


  </div>

  <div class="">
  <input type="hidden" id="id_user" value="  <?php echo $user->id_a; ?>">
 
    
    <?php  demande_reservation(); ?>
      </div> 

  </div>
  </div>
  </section>

  <?php require_once("footer.php");   ?>
  
 
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>