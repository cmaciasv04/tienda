<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Citas</title>
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

   <div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="frmdoctor.php" class="navbar-brand">Bienvenido Doctor
				<?php
					session_start();
					echo $_SESSION['nombre'];
					?>
				</a>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">						
                    <li><a href="datospersonalesdoctor.php">Mis datos</a></li>
					<li><a href="citasdoctor.php">Citas</a></li>
					<li><a onclick="cambiar();" href="#">Cambiar contraseña</a></li>	
					<li><a href="php/cerrarsesion.php"><span class="label label-danger">CERRAR SESION </span></a></li>					
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="container">
<div class="panel panel-default">
    
<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Hararios<span class="navbar-brand2"></span></a>
    </div>
</nav>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>HORAS</th>
					<th>PACIENTE</th>	
					<th>Datos personales</th>				
					<th>ACCION</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $user=$_SESSION['nombre'];
				     $result=mysqli_query($conexion,"SELECT id,horas,paciente FROM horarios where doctor='$user'");
				     while ($horarios=mysqli_fetch_array($result)){	
						  $id=$horarios['id'];
						  $paciente=$horarios['paciente'];
						 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
						 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";				     
						 echo "<td id='paciente:$id' class='cam_editable'>".$horarios['paciente']."</td>";
//						 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";	
						 if ($horarios['paciente']<>''){
							 echo"<td id='$id' name='$paciente' button='false'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-eye-open'></span> Ver</button></td>";
							 echo"<td id='$id' name='$paciente' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Cancelar Cita</button></td>";
						 }else{
							 echo"<td id='$id' name='$paciente' button='false'></td>";
							 echo"<td id='$id' name='$paciente' button='true'></td>";
						 }
						 echo"</tr>";
							 }
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
<!--//////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
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
<!--//////////////////////////////////////////////////-->
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
	<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/maindoctor.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>