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

  
  <?php   require_once("function.php");
  
 
  


  echo affiche('room_link');
  
  
  ?>
 
  
  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Best Rooms</h1>
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
      <div class="row">

      <?php  get_all_anonnces();   ?>
      
        <div class="clearfix visible-sm-block"></div>

      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Why Choose Us?</h2>
          <p class="mb50"><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>1+ Million Hotel Rooms</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Food &amp; Drinks</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Airport Taxi</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Explore our Services</h2>
          <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/001-building.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>1+ Million Hotel Rooms</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/003-restaurant.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Food &amp; Drinks</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/004-parking.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Airport Taxi</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
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

  <?php require_once("footer.php");   ?>

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>


  </body>
</html>