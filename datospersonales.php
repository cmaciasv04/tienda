<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Mis datos personales</title>
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
        <div class="heading animate-box"><h4><b><span class="text-org">Bienvenido Usuario-</span> <span class="text-gr">
     
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>
				</a></span></b></h3>
    </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navi">
			<li class="nav-item"><a class="nav-link nav-btn active" href="datospersonales">Mis datos</a></li>
            <li class="nav-item"><a class="nav-link nav-btn active" href="datoscita">Mis citas</a></li>
		    <li class="nav-item"><a class="nav-link nav-btn active" onclick="cambiar();" href="#">Cambiar contraseña</a></li>
			<li class="nav-item"><a class="nav-link nav-btn active" href="php/cerrarsesion">CERRAR SESION</a></li>		
					               
            </ul>
        </div>
    </div>
</nav>



<div class="container">
<div class="panel panel-default">
   
<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Mis datos<span class="navbar-brand2"></span></a>
    </div>
</nav>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>NOMBRE DE USUARIO</th>
					<th>CEDULA</th>	
					<th>NOMBRE</th>	
					<th>APELLIDO</th>	
                    <th>DIRECCION</th>	
					<th>CORREO</th>	
					<th>TELEFONO</th>	
					<th>FECHA DE NACIMIENTO</th>	
					<th>SEXO</th>	
										
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
					 $user=$_SESSION['nombre'];
				     $result=mysqli_query($conexion,"SELECT * FROM datosusuario where idusuario='$user'");				    
				     while ($usuarios=mysqli_fetch_array($result)){					 
					 echo "<tr><td id='id:$user' class='cam_editable'>".$user."</td>";
					 echo "<td id='cedula:$user' class='cam_editable' contenteditable='true'>".$usuarios['cedula']."</td>";
				     echo "<td id='nombre:$user' class='cam_editable' contenteditable='true'>".$usuarios['nombre']."</td>";
					 echo "<td id='apellido:$user' class='cam_editable' contenteditable='true'>".$usuarios['apellido']."</td>";				
					 echo "<td id='direccion:$user' class='cam_editable' contenteditable='true'>".$usuarios['direccion']."</td>";
					 echo "<td id='correo:$user' class='cam_editable' contenteditable='true'>".$usuarios['correo']."</td>";
					 echo "<td id='telefono:$user' class='cam_editable' contenteditable='true'>".$usuarios['telefono']."</td>";
					 echo "<td id='fecha:$user' class='cam_editable' contenteditable='true'>".$usuarios['fecha']."</td>";
					 echo "<td id='sexo:$user' class='cam_editable' contenteditable='true'>".$usuarios['sexo']."</td>";
					
					 echo"</tr>";
					 }
				?>				
			</tbody>					
		</table>
	</div>
	</div>	
	</div>
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">cambiar contraseña</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita nueva password</label>
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
	  <br><br><br><br><br><br>
<div class="signup animate-box" id="fh5co-newsletter">
    <div class="text-center"><h2>Es un placer vindrarles felicidad en su vida</h2></div>
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
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>