<?php 

include "conexion.php";
if ($mysqli === false){
	die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
} 
if($_POST){
	$us=$_POST["username"];
	$pw=$_POST["password"];
	$n=$_POST["name"];
	$m=$_POST["email"];

	if ($mysqli->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO usuario (contrasenia,username,nombre,correo,rol)
			VALUES ('$us', '$pw', '$n','$m','U')";
	if( empty($us) && empty($pw)){
	print "<script>alert(\"Acceso invalido.\");window.location='index.php';</script>";
	}else{
		

		$mysqli->query($sql);
		header("location: index.php");	
	}

	$mysqli->close();
 }

?> 