<?php 
	if($_POST){
		include "conexion.php";
			
			$un=$_POST["username"];
			$pw=$_POST["password"];
			$sql1= "SELECT * FROM usuario WHERE username='$un' AND contrasenia='$pw'";
			//echo $sql1."C";
			$query = $mysqli->query($sql1);
			$r=$query->fetch_array();
			//print_r($r);
			$user_id=$r["idUsuario"];
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='index.php';</script>";
			}else{ 

				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["user_name"]=$r["username"];
				echo $_SESSION["user_id"]." ".$_SESSION["user_name"];
				print "<script>alert(\"Bienvenido.\");window.location='indexin.php';</script>";
				
			}
		}
 ?>