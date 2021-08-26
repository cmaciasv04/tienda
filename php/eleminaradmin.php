<?php
if(!empty($_POST))
$conexion=(mysqli_connect("localhost","root",""));
	if (!$conexion){
	    die('No pudo conectarse: ' .mysqli_error());
	}
  mysqli_select_db($conexion,'hospital') or die ("no se encuentra la bd");
	foreach($_POST as $field_name=>$val){
	$field_id=strip_tags(trim($field_name));
	if(!empty($field_id)){
		mysqli_query($conexion,"DELETE FROM usuarios where nombre='$field_id'") or mysql_error();
		echo"true";
	}else{
			echo"false";
		}
	}





?>