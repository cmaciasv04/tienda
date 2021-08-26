<?php

	$conexion=(mysqli_connect("localhost","root",""));
    mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");
    $horas=$_POST['horas'];
    
	// $password=$_POST['password'];	
	// $tipo='usuario';	
	
// 	$consultarcedula="SELECT * FROM datoscita where cedula='$cedula'";
// 	$resultadocedula=mysqli_query($conexion,$consultarcedula);
// 	$busquedacedula=mysqli_fetch_array($resultadocedula);
// //	echo $busquedacedula;
// 	$consultarusuario="SELECT * FROM usuarios where nombre='$nombreusuario'";
// 	$resultadousuario=mysqli_query($conexion,$consultarusuario);	
// 	$busquedausuario=mysqli_fetch_array($resultadousuario);
//	echo $busquedausuario;	
			// mysqli_query($conexion, "INSERT INTO datoscita (idcita, cedula, nombre, apellido, nom_doc, fecha, especialidad, comentario) VALUES ('1', '0918917732', 'Juan', 'Perez', 'dr. ledea', '02/02/2020', 'acupuntura', 'martes')");
		 $insertar="INSERT INTO horarios (horas) VALUES ('$horas')";
		 mysqli_query($conexion,$insertar) or die(mysql_error());

        mysqli_query($conexion,$insertar) or die ("exito");
      
        mysqli_close($conexion);
			echo"true";
		
		

?>