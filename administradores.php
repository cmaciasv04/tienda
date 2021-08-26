<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Administradores</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="./js/modernizr-3.5.0.min.js"></script>
</head>
<body>

 <class="row top-bar">
    <div class="col-sm-1"></div>
    <div class="col-sm-5 d-sm-block d-none" style="font-size: 19px">
    </div>
    <div class="col-sm-3 col-1 login">
        <a href="index.html" class="text-white">Salir</a> 
       
    </div>
</div>

<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Spa Fresh <span class="navbar-brand2"></span></a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
         <div class="heading animate-box"><h4><b><span class="text-org">Bienvenido Administrador-</span> <span class="text-gr">
     
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>
				</a></span></b></h3>
		
    </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navi">
			<li class="nav-item"><a class="nav-link nav-btn active" href="administradores.php">Administradores</a></li>
            <li class="nav-item"><a class="nav-link nav-btn active" href="doctores.php">Doctores</a></li>	
			<li class="nav-item"><a class="nav-link nav-btn active" href="clientes.php">Clientes</a></li>	
            <li class="nav-item"><a class="nav-link nav-btn active" href="cita.php">Citas</a></li>					
		    <li class="nav-item"><a class="nav-link nav-btn active" onclick="cambiar();" href="#">Cambiar contraseña</a></li>
			<li class="nav-item"><a class="nav-link nav-btn active" href="php/cerrarsesion.php">CERRAR SESION</a></li>		
					               
            </ul>
        </div>
    </div>
</nav>

<div class="container">


    <div class="container">
        <a class="navbar-brand" href="#">LISTA DE ADMINISTRADORES<span class="navbar-brand2"></span></a>
    </div>

<div class="panel panel-default">

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>					
					<th>NOMBRE</th>
					<th>ACCIONES</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT nombre FROM usuarios where tipo="admin"');
				     while ($usuarios=mysqli_fetch_array($result)){
						 $nombre=$usuarios['nombre'];
					 echo "<tr><td id='id:$nombre' class='cam_editable'>".$usuarios['nombre']."</td>"; 
				     echo"<td id='$nombre' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";		 
					 echo"</tr>";
					 }				
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<button type="button" onclick="ventananuevo();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
           
         
            <nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="container">
            <a class="navbar-brand" href="#">Nuevo Administrador<span class="navbar-brand2"></span></a>
            </div> 
            </nav>
            </div>
            <form role="form"  id= "frmadministrador" name="frmadministrador" onsubmit="Registraradministrador(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Nombre</label>
                  <input  name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" class="form-control" type="password" required>
                </div>                         
                
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
	
<!--//////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
     
            <nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="container">
            <a class="navbar-brand" href="#">Cambio de Contraseña<span class="navbar-brand2"></span></a>
            </div> 
            </nav>
            </div>
           
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Contraseña antigua:</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>Nueva contraseña:</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>Repita nueva password:</label>
                  <input  name="password2" id="p4" class="form-control" type="password" required>
                </div> 
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
	  
	  <br><br><br><br>
	  
<div class="darker">
    <div class="container" id="fh5co-legal">
        <div class="row">
            <div class="col-sm-8 text-white mtext-center">
               
            </div>
           
        </div>
    </div>
</div>
<!--//////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">
	function cambiar(){
          $('#modal2').modal('show');

        }
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>