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
      <a class="navbar-brand" href="indexin.php">No tengo Miedo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#about">ABOUT</a></li>
        <li><a href="index.php#services">SERVICES</a></li>
        <li><a href="instinot.php">INSTITUTIONS</a></li>
        <li><a href="top5not.php">TOP 5 INSTITUTIONS</a></li>
         <li><a href='index.php'>REGISTER</a></li>
           <li><a href='index.php'>LOGIN</a></li>  
        
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
 <div id="lista" class="container-fluid text-center" align="center">
  <div class="row">
    <div class="col-sm-28">
      <p><strong>NAME</strong></p>
      <p><?=$row["nombre"];?></p>
      <img src="<?=$row['img']?>" alt="foto">
      <p><strong>DESCRIPTION</strong></p>
      <p><?=$row["descripcion"];?></p>
      <p><strong>ADDRESS</strong></p>
      <p><?=$row["direccion"];?></p>
      <p><strong>SCHEDULE</strong></p>
      <p><?=$row["horarioAtencion"];?></p>
      <p><strong>PHONE</strong></p>
      <p><?=$row["telefono"];?></p>
       <p><a href="<?=$row['url'];?>" class="btn btn-lg"> MORE INFO <?=$row['url'];?></a></p>
      
     
      <p><strong>TYPES OF SERVICE</strong></p>
      <?php
       $sql2= "SELECT * FROM tiposdeservicio WHERE institucion=".$row['idInstitucion'];
       $query2 = $mysqli->query($sql2);
       while($r=$query2->fetch_array()){
          echo "<h5>".$r["tipo"]."</h4>";
       } 
        
     ?>
      <?=$row["iframeDir"];?>
     
    </div>
  </div>
  <form action="index.php#login" method="get">
      



        <input type="hidden" value="<?=$row['idInstitucion']?>" name="idInstitucion" id="idInstitucion">
                <div class="form-group" align="center">

        </div>
        <input type="text" name="puntuacion" class="rating rating-loading" value="0" data-size="lg" title="">
        <br>
        <input type="text" name="titulo" class="form-control" placeholder="Titulo">
        <textarea type="text" name="historia" class="form-control" placeholder="Historia"></textarea>  
        <button type="submit" class="btn btn-primary">Login for Submit please!!</button>
  </form>




<?php 
 $sql8= "SELECT * FROM review where Institucion=$idI";
       $query8 = $mysqli->query($sql8);

       while($r8=$query8->fetch_array()){

$query33=$mysqli->query("SELECT username FROM usuario where idUsuario=".$r8["usuario"]);
      $fila=$query33->fetch_assoc();


     ?>
     <p><strong>BY</strong></p>
      <p><?=$fila["username"];?></p>

      
      <p><strong>TITLE:</strong></p>
      <p><?=$r8["titulo"];?></p>
      <p><strong>STORY</strong></p>
      <p><?=$r8["historia"];?></p>
      <p><strong>DATE</strong></p>
      <p><?=$r8["fecha"];?></p>


      <?php
     


      }
?>
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
</body>
</html>
