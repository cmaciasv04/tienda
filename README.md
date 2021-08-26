<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Venta</title>
	  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
	<script type='text/javascript'>
	$(function(){
		$("#guardar").click(function(){ 
			$.post("../../Controlador/controladortienda.php",
				$("#datos").serialize(),respuesta);
			window.location.href = "index1.html";
		});
	});
	
		
	
	function respuesta(arg)
	{
		alert(arg);
	}
	</script>
  </head>
  <body>
        <table  width=100% bgcolor=#000000><align="center"><tr><td>
        <h1 align="center"><font color=#FFFFFF">Tienda MEGaeXITO</h1>
        </table>


<br>
<h1 align="center"> Ingreso de nuevo producto </h1>
<br>

 
 <table align="center" cellspacing="1" cellpadding="20" border="1" bgcolor=151414>
<tr>
 <td colspan="3" align="center" bgcolor="#F1C40F"><font color="151414"><strong><h2> Nuevo ingreso</h2></strong></font></td>
</tr>
 <form id="datos">
<tr bgcolor="FDFDFD">

    <td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="Nombre"><i>Nombre del producto:</i></label>
    <input type="text" class="Input" size="30" id="nmprod" name="nmprod" placeholder="Ingrese nombre del producto">
    </div></td>
    
	<td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="Codigo"><i>Ingresa codigo:</i></label>
      <input type="text" class="Input" size="30" id="numcodigo" name="numcodigo" placeholder="Ingrese codigo">
    </div></td>
    </tr>
  
  
 <tr bgcolor="FDFDFD">
    <td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="Nombre"><i>Ingresa nombre de proveedor:</i></label>
    <input type="text" class="Input" placeholder="Ingrese nombre de proveedor" id="nomproveedor" name="nomproveedor" value="" size="30" /></td> 
    </div></td>
     
	<td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="fecha"><i>Ingrese precio del producto:<i/></label>
      <input type="text" class="Input" size="30" id="pvp" name="expfecha" placeholder="Ingrese precio">
    </div></td>
    </tr>
	
<tr bgcolor="FDFDFD">	
    
	<td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="fecha"><i>Fecha de elaboracion:</i></label>
    <input type="date" class="Input" size="40" id="elavfecha" name="elavfecha" placeholder="fecha de elaboracion">
    </div></td> 
	
	<td>
    <div class="form-row">
    <div class="form-group col-md-6">
	<label for="fecha"><i>Fecha de caducidad:</i></label>
    <input type="date" class="Input" size="40" id="expfecha" name="expfecha" placeholder="fecha de expiracion">
    </div></td>
</tr>	
   </form>
  </table>
 
  <br>
		
		<table  width=100% bgcolor=#0C3742><tr><td>
		</table>
		 
		<div align="center"< id="panel">
		
		
        <script>
        function Guardar() {
	    var pregunta = confirm("Desea ingresar este nuevo articulo?")
	    if (pregunta){
		alert("Ingreso exitoso")
		  window.location = "index1.html";
		}
	    }
        </script>
       <button  type="button" onclick="Guardar()"  id="guardar" <a href="index1.html">Ingresar</a></button>
			
	    <script>
        function Salir() {
	    var pregunta = confirm("Esta seguro")
	    if (pregunta){
		alert("Muchas gracia hasta luego")
		  window.location = "index1.html";
		}
	    
        }
        </script>
		
        <button type="button" onclick="Salir()" >Cancelar y salir</button>
		
         </div>
    	  
		<table  width=100% bgcolor=#0C3742><tr><td>
		</table>
         
</form>
    </body>
</html>
