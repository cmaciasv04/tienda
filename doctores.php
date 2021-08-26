<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Doctores</title>
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
<div class="panel panel-default">
   
<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">LISTA DE DOCTORES <span class="navbar-brand2"></span></a>
    </div>
</nav>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>					
					<th>USUARIO ID</th>
					<th>CEDULA</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>DIRECCION</th>
					<th>CORREO</th>
					<th>TELEFONO</th>
					<th>ESPECIALIDAD</th>
					<th>SEXO</th>
					<th>ACCIONES</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT nombre FROM usuarios where tipo="doctor"');				    
				     while ($usuarios=mysqli_fetch_array($result)){
						 $id=$usuarios['nombre'];
					 //////////////////////////////////////
					 $result2=mysqli_query($conexion,"SELECT * FROM datosdoctor where iddoctor='$id'");
					 $dato=mysqli_fetch_array($result2);
					 //////////////////////////////////////
					 echo "<tr><td id='id:$id' class='cam_editable'>".$usuarios['nombre']."</td>";
					 echo "<td id='cedula:$id' class='cam_editable' contenteditable='true'>".$dato['cedula']."</td>";
				     echo "<td id='nombre:$id' class='cam_editable' contenteditable='true'>".$dato['nombre']."</td>";
					 echo "<td id='apellido:$id' class='cam_editable' contenteditable='true'>".$dato['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='direccion:$id' class='cam_editable' contenteditable='true'>".$dato['direccion']."</td>";
					 echo "<td id='correo:$id' class='cam_editable' contenteditable='true'>".$dato['correo']."</td>";
					 echo "<td id='telefono:$id' class='cam_editable' contenteditable='true'>".$dato['telefono']."</td>";
					 echo "<td id='fecha:$id' class='cam_editable' contenteditable='true'>".$dato['especialidad']."</td>";
					 echo "<td id='sexo:$id' class='cam_editable' contenteditable='true'>".$dato['sexo']."</td>";
					 ///////////////////////////////////////	 
				     echo"<td id='$id' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";
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
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">            
             <nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
			   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <div class="container">
             <a class="navbar-brand" href="#">Nuevo Doctor <span class="navbar-brand2"></span></a>
             </div>
             </nav>
            </div>
            <form role="form"  id= "frmdoctor" name="frmdoctor" onsubmit="Registrardoctor(); return false">
             
			 <div class="col-lg-12">               
                   <div class="form-group">
                  <label>Usuario ID</label>
                  <input  name="nombreusuario" class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>Cedula</label>
                  <input  name="cedula" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Nombre</label>
                  <input  name="nombre" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Apellido</label>
                  <input  name="apellido" class="form-control" required>
                </div>
                
                
                <div class="form-group">
                  <label>Direccion</label>
                  <input  name="direccion"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>Correo</label>
                  <input  name="correo" type="email"  class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>Telefono</label>
                  <input  name="telefono" type="number"  class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Especialidad</label>
                  <input  name="especialidad"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>Sexo</label>
                  <select name='sexo' class='form-control'>
					  <option value="Femenino">Femenino</option>
					  <option value="Masculino">Masculino</option>					  
				  </select>
                 </div>          

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" class="form-control" type="password"required>
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
	</div>


<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="container">
<div class="panel panel-default">
   
<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">HORARIOS <span class="navbar-brand2"></span></a>
    </div>
</nav>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>					
					<th>HORA</th>
							
				</tr>
			</thead>
			<tbody>
				
			       <?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT horas FROM horarios ');
				     while ($horarios=mysqli_fetch_array($result)){
						 $horas=$horarios['horas'];
						 
					 echo "<tr><td id='horas:$horas' class='cam_editable'>".$horarios['horas']."</td>"; 
				     echo"<td id='$horas' button='true'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";		 
					 echo"</tr>";
					 }				
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<button type="button" onclick="ventananuevo1();" class="btn btn-success btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	

<!--////-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">            
             <nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
			   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <div class="container">
             <a class="navbar-brand" href="#">HORIOS <span class="navbar-brand2"></span></a>
             </div>
             </nav>
            </div>
            <form role="form"  id= "frmhora" name="frmhora" onsubmit="Registrarhora(); return false">
             
			 <div class="form-group">
                     <label>HORARIO</label>
                     <input  name="horas" type="text" class="form-control" >
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
		 function ventananuevo1(){
          $('#modal1').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>