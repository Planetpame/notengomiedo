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
      <a class="navbar-brand" href="indexin.php">No tengo Miedo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">ABOUT</a></li>
        <li><a href="index.php">SERVICES</a></li>
        <li><a href="instinot.php">INSTITUTIONS</a></li>
        <li><a href="#pricing">TOP 5 INSTITUTIONS</a></li>
        
         <?php @session_start(); if($_SESSION["user_id"]) {
            echo "<li><a href='#login'>logout</a></li>";
          }else{
             echo "<li><a href='#contact'>REGISTER</a></li>";
             echo "<li><a href='#login'>LOGIN</a></li>";    
            }?>
      </ul>
    </div>
  </div>
</nav>



<br>
<Br>
<br>

<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
     <?php include "conexion.php"; 


            $sql= "SELECT * FROM institucion order by puntos desc limit 0,5";
            $query = $mysqli->query($sql);
            while($row=$query->fetch_array()){
              $x=$row["idInstitucion"];
        ?>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
       

        <div class="panel-heading">
          <h1><?= $row["nombre"]?></h1>
        </div>
        <div class="panel-body">


          <p><strong>DESCRIPCION</strong></p>
          <p><?= $row["descripcion"]?></p>
          <p><strong>DIRECCION</strong></p>
          <p><?= $row["direccion"]?></p>
          <p><strong>HORARIOS</strong></p>
          <p><?= $row["horarioAtencion"]?></p>
        </div>
        <div class="panel-footer">
      
          <h3> <?php $sql1="SELECT sum(puntuacion)/count(*) as cant from review where review.Institucion=$x";
          $query5 = $mysqli->query($sql1);
          $row=$query5->fetch_array();
          echo round ($row["cant"],1);
 ?></h3>
          <h4>puntos</h4>
          <a href="instituciones.php?idI=<?=$row['idInstitucion']?>" class="btn btn-lg">MAS INFORMACION</a>
          <a href="<?=$row['url'];?>" class="btn btn-lg">PAGINA WEB</a>
        </div>
        
      </div>
    </div>
    <?php    
            }
        ?>
  </div>
</div>





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

