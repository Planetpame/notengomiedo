<?php 
    include "conexion.php";
        if ($mysqli === false){
            die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
        }
        if(isset($_GET)){
            print_r($_GET);
            session_start();
            echo $v1=$_GET["idInstitucion"];
            echo $v2=round($_GET["puntuacion"]);
            echo $v3=$_GET["titulo"];
            echo $v4=$_GET["historia"];
            echo $v5=$_SESSION["user_id"];

            echo $r1=$_GET["underwear1"];
            echo $r2=$_GET["underwear2"];
            echo $r3=$_GET["underwear3"];
            echo $r4=$_GET["underwear4"];
            $sql = "INSERT INTO review (titulo,historia,puntuacion,Institucion,usuario,r1,r2,r3,r4)
                VALUES ('$v3', '$v4', $v2,$v1,$v5,$r1,$r2,$r3,$r4)";
            $mysqli->query($sql);

            echo "siiiiii";
        } 
        print "<script>window.location='index.php';</script>";
        $mysqli->close();    

?>


