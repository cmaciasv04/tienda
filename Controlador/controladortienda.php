<?php
require_once("C:\Users\Carlos Macias\Desktop\Tienda crud\Modelo\venta.php");
$objventa=new venta;
switch($_POST['opcion'])
{
	case 'consultar':
		$datos=$objventa->ObtenerTodos();
		$tabla="";
		
		foreach($datos as $fila)
		{
			$tabla.="<tr>";
			$tabla.="<th scope='row'>".$fila['numcodigo']."</th>";
			$tabla.="<td>".$fila['nomprod']."</td>";
			$tabla.="<td>".$fila['nomproveedor']."</td>";
			$tabla.="<td>".$fila['pvp']."</td>";
			$tabla.="<td>".$fila['elavfecha']."</td>";
			$tabla.="<td>".$fila['expfecha']."</td>";
			
			$tabla.="<tr>";
		}
		echo $tabla;
		break;
	case 'ingresar':
		$datos['numcodigo']=$_POST['Codigo'];
		$datos['nomprod']=$_POST['Nombre del producto'];
		$datos['nomproveedor']=$_POST['Nombre del proveedor'];
		$datos['pvp']=$_POST['P.v.P'];
		$datos['elavfecha']=$_POST['Elav.fecha'];
		$datos['expfecha']=$_POST['Exp.fecha'];
		
			if($objventa->nuevo($datos))
			{
				echo "Registro ingresado";
			}
			else
			{
				echo "Error al registrar".$objventa->geterror();
			}
		break;
}
?>