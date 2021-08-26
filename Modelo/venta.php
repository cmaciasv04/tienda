<?php
require_once("conexion.php");
Class Venta
{
	public function ObtenerTodos()
	{	$conexion=new Conexion;
		$venta=$conexion->consultar('tbventas');
		return $venta;
	}
	public function nuevo($datos)
	{	$conexion=new Conexion;
		$venta=$conexion->insertar('tbventas',$datos);
		return $venta;
	}
}
?>