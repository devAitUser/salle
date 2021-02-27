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
  
  require_once("db_connect.php");






if(!empty($_POST['submit'])){

  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $email= $_POST['email'];
  $role = "user";
  $nom =$_POST['nom'];
  $prenom =$_POST['prenom'];


// Insertion
$req = $bdd->prepare('INSERT INTO user(id,email, pass, role, nom, prenom) VALUES(NULL, :email , :pass , :role,:nom,:prenom)');
$req->execute(array(
    'email' => $email,
    'pass' => $pass_hache,
    'role' => $role,
    'nom' => $nom,
    'prenom' => $prenom));  

    header("Location: index.php");  
  
  }


  ?>
  <script>
  function myFunction() {
 

    if(document.getElementById("pass").value ==  document.getElementById("pass_rp").value  ){
      return true;
     
     }else{
       return false;
     }
     
     
     }


     }
  
  </script>

  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Book A Room</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-8">
          <h2 class="mt0">Inscription</h2>
          <form action="#" method="post" class="probootstrap-form" onsubmit="return myFunction();">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Prenom</label>
                  <input type="text" class="form-control" id="PRENOM" name="prenom">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <input type="email" class="form-control" id="email" name="email">
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
              <div class="col-md-6">
                <div class="form-group">
                  <label for="children">repter mot de pass</label>
                  <div class="form-field">
                  <input type="Password" class="form-control" id="pass_rp" name="pass">
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyer">
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2 class="mt0">Feedback</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-half">
    <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
    <div class="text">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="mt0">Best 5 Star hotel</h2>
        <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
        <div class="row">
          <div class="col-md-6">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>    
          </div>
          <div class="col-md-6">
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>    
          </div>
        </div>
        <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
      </div>
    </div>
  </section>

  <!-- START: footer -->
  <?php require_once("footer.php");   ?>
  <!-- END: footer -->
  
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>