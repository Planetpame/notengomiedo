<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="css/estilos.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/theme-krajee-fa.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/theme-krajee-svg.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="css/theme-krajee-uni.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/star-rating.js" type="text/javascript"></script>
  <style>
  .navbar-header{
    background-color: orange
  }
  .navbar-default{
    background-color: orange
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top" >
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
<?php 
	if(isset($_GET['idI'])){
		$idI= $_GET['idI'];
	    include "conexion.php"; 
        $sql= "SELECT * FROM institucion WHERE idInstitucion=$idI";
        $query = $mysqli->query($sql);
        $row=$query->fetch_array();
       // print_r($row);       
?>	
 <div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <p><strong>NOMBRE</strong></p>
      <p><?=$row["nombre"];?></p>
      <img src="<?=$row['img']?>" alt="foto">
      <p><strong>DESCRIPCION</strong></p>
      <p><?=$row["descripcion"];?></p>
      <p><strong>DIRECCION</strong></p>
      <p><?=$row["direccion"];?></p>
      <p><strong>HORARIOS DE ATENCION</strong></p>
      <p><?=$row["horarioAtencion"];?></p>
      <p><strong>TELEFONO</strong></p>
      <p><?=$row["telefono"];?></p>
      <p><strong>TIPOS DE SERVICIO</strong></p>
      <?php
       $sql2= "SELECT * FROM tiposdeservicio WHERE institucion=".$row['idInstitucion'];
       $query2 = $mysqli->query($sql2);
       while($r=$query2->fetch_array()){
          echo "<h5>".$r["tipo"]."</h4>";
       } 
        
     ?>
      <?=$row["iframeDir"];?>
      <p><a href="<?=$row['url'];?>" class="btn btn-lg">PAGINA WEB</a></p>
      
     
    </div>
  </div>
  <form action="sample.php" method="get">
        <div class="page-header">
            <small>1. I hate it. </small>
            <small>2. I don't like it., </small>
        </div>
        <input type="hidden" value="<?=$row['idInstitucion']?>" name="idInstitucion" id="idInstitucion">
        <input type="text" name="puntuacion" class="rating rating-loading" value="0" data-size="lg" title="">
        <br>
        <input type="text" name="titulo" class="form-control" placeholder="Titulo">
        <textarea type="text" name="historia" class="form-control" placeholder="Historia"></textarea>  
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <script>
    $(document).on('ready', function () {
        $('.kv-gly-star').rating({
            containerClass: 'is-star'
        });
        $('.kv-gly-heart').rating({
            containerClass: 'is-heart',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            filledStar: '<i class="glyphicon glyphicon-heart"></i>',
            emptyStar: '<i class="glyphicon glyphicon-heart-empty"></i>'
        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
        $('.kv-fa-heart').rating({
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-heart"></i>',
            emptyStar: '<i class="fa fa-heart-o"></i>'
        });
        $('.kv-uni-star').rating({
            theme: 'krajee-uni',
            filledStar: '&#x2605;',
            emptyStar: '&#x2606;'
        });
        $('.kv-uni-rook').rating({
            theme: 'krajee-uni',
            defaultCaption: '{rating} rooks',
            starCaptions: function (rating) {
                return rating == 1 ? 'One rook' : rating + ' rooks';
            },
            filledStar: '&#9820;',
            emptyStar: '&#9814;'
        });
        $('.kv-svg').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-star"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-star"></span>'
        });
        $('.kv-svg-heart').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            containerClass: 'is-heart'
        });

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>
</div>

<?php
 }
?>

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
