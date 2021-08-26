<?php
if(!empty($_POST))
	session_start();
$conexion=(mysqli_connect("localhost","root",""));
    mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");

	$vieja=$_POST['password0'];
	$nueva=$_POST['password1'];
    $usuario=$_SESSION['nombre'];
		
			$update="UPDATE usuarios set password='$nueva' where nombre='$usuario'";	
			
			mysqli_query($conexion,$update)or die(mysqli_error());
			echo "contraseña cambiada";
		
	

?>