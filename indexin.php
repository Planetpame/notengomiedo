<!DOCTYPE html>
<html lang="en">
<head>
  <title>No tengo miedo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="css/estilos.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">No tengo Miedo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="institutions.php">INSTITUTIONS</a></li>
        <li><a href="top5.php">TOP 5 INSTITUTIONS</a></li>
        
    
         

         <li><a href="logout.php">LOGOUT</a></li>


            <li>  <h2> Welcome <?php @session_start(); if($_SESSION["user_id"]) {
         echo $_SESSION["user_name"];        
           }else{
             echo "<li><a href='#contact'>REGISTER</a></li>";
             echo "<li><a href='#login'>LOGIN</a></li>";  

            }?> </h2> <h2></li>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>No tengo Miedo</h1>
  <p>Women Victims of violence  helping Victims </p>
  <form class="form-inline" >
    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Hey I'm Pamela Part of No tengo Miedo Staff</h2><br>
      <h4>I suffered of sexual harassment at the university by a professor.I was afraid of report it,that incident destroyed my life .I dind't know where I shoud go and report it. When I decide to report to my university people that work there told me that a report could not be a good idea because nobody would do anything  and what happened probably was my fault.</h4><br>
      <p>So I visided many institutions looking for help because sexual harassment is dificult to prove nobody believed in me after a long time I found Mujeres Creando a institution that provided me psycologycal support .They forced the university to start a college process against my assailant. During the process the investigators found many victims. Then I had to face corruption after many months justice has been done.
I think if I had known wich Institucion was the best I would spend less time and feel confident.
I will be happy if my experience helps someone in the same situation so I know how hard is it.
      </p>
      <br>
    </div>
    <div class="container" align="center">
  <img align="center" src="pam.jpg" class="img-responsive" alt="Cinque Terre" width="300" height="232">
</div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122403.42038002255!2d-68.16155344608828!3d-16.52070062901087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf0a04f5a40f%3A0x57dbfc76b4458ab3!2sLa+Paz!5e0!3m2!1ses!2sbo!4v1466889596648" width="400" height="400" frameborder="3" style="border:0" allowfullscreen ></iframe>    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong align="center">MISSION:</strong> Help victims of violence against woman to decide where they have to go  with our ranking and ask for help.</h4><br>
      <h4><strong align="center">VISION:</strong> Sensitize institutions about their shortcomings.</h4><br>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>What we offer</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Collecting data</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>PASSION</h4>
      <p>Passionate work.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Information</h4>
      <p>Reliable information</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Top 5 </h4>
      <p> The 5 The best institutions that provide help</p>
    </div>
    
  </div>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <?php session_start(); if(!$_SESSION["user_id"]) {?>
  <h2 class="text-center">REGISTER</h2>
  <div class="row">
    <div class="col-sm-5">
      <p> Be free to put your name or email if you want .</p>
      
    </div>
    <div class="col-sm-7 slideanim">
      <form action="registrar_usuario.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name (Optional)" type="text">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email (Optional)" type="email">
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">REGISTER</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<div id="login" class="container-fluid bg-grey">
  <h2 class="text-center">LOGIN</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> La Paz, Bolivia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <form action="comprueba_login.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">LOGIN</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php  }?>


<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>NO TENGO MIEDO PROJECT <a href="http://www.FAMAFANSBOLIVIA.com/notengomiedo" title="Visit No tengo miedo">www.notengomiedobo.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

  
 

</body>
</html>

