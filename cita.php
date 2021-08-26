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
        <a class="navbar-brand" href="#">TODAS LAS CITAS PROGRAMADAS <span class="navbar-brand2"></span></a>
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
                     <th>DOCTOR</th>	
                    <th>ESPECIALDDAD</th> 
					<th>Fecha</th>
                    <th>Hora</th>  	
					<th>COMENTARIO</th>	
						
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,"SELECT * FROM datoscita ");			    
				     while ($usuarios=mysqli_fetch_array($result)){					 
					 echo "<td id='idcita:' class='cam_editable' contenteditable='true'>".$usuarios['idcita']."</td>";
					 echo "<td id='cedula:' class='cam_editable' contenteditable='true'>".$usuarios['cedula']."</td>";
				   echo "<td id='nombre:' class='cam_editable' contenteditable='true'>".$usuarios['nombre']."</td>";
					 echo "<td id='apellido:' class='cam_editable' contenteditable='true'>".$usuarios['apellido']."</td>";				
					 echo "<td id='nom_doc:' class='cam_editable' contenteditable='true'>".$usuarios['nom_doc']."</td>";
                     echo "<td id='especialidad:' class='cam_editable' contenteditable='true'>".$usuarios['especialidad']."</td>";
					 echo "<td id='fecha:' class='cam_editable' contenteditable='true'>".$usuarios['fecha']."</td>";
                     echo "<td id='hora:' class='cam_editable' contenteditable='true'>".$usuarios['hora']."</td>";
					 echo "<td id='comentario:' class='cam_editable' contenteditable='true'>".$usuarios['comentario']."</td>";
					 
					
							
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
             <a class="navbar-brand" href="#">Nueva cita <span class="navbar-brand2"></span></a>
             </div>
             </nav>
            </div>
            <form role="form"  id= "frmcita" name="frmcita" onsubmit="Registrarcita(); return false">
              <div class="col-lg-12">               
                   <div class="form-group">
                  <label>Usuario ID</label>
                  <input  name="nombreusuario" class="form-control" >
                </div>
                 <div class="form-group">
                  <label>cedula</label>
                  <input  name="cedula" type="text" class="form-control" >
                </div>
				
                 <div class="form-group">
                     <label>nombre</label>
                     <input  name="nombre" type="text" class="form-control" >
                </div>
               <div class="form-group">
                     <label>apellido</label>
                     <input  name="apellido" type="text" class="form-control" >
                </div>
                                
               <div class="form-group">
			       <?php $mysqli = new mysqli('localhost', 'root', '', 'hospital');?>
				   <label>DOCTOR</label>
                   <select name="nom_doc" class="form-control">
                   <option value="0">Seleccione:</option>
                   <?php $query = $mysqli -> query ("SELECT apellido,nombre FROM datosdoctor");
                       while ($valores = mysqli_fetch_array($query)) {
                       echo '<option value="'.$valores[apellido].'">'.$valores[nombre].'</option>';}?>
                      </select>
                      
                </div>
				
                <div class="form-group">
			       <?php $mysqli = new mysqli('localhost', 'root', '', 'hospital');?>
				   <label>ESPECIALDDAD</label>
                  <select name="especialidad" class="form-control">
                   <option value="0">Seleccione:</option>
                   <?php $query = $mysqli -> query ("SELECT especialidad FROM datosdoctor");
                       while ($valores = mysqli_fetch_array($query)) {
                       echo '<option value="'.$valores[especialidad].'">'.$valores[especialidad].'</option>';}?>
                      </select>
                      
                </div>
				
                <div class="form-group">
			       <?php $mysqli = new mysqli('localhost', 'root', '', 'hospital');?>
				   <label>HOARARIO</label>
                  <select name="hora" class="form-control">
                   <option value="0">Seleccione:</option>
                   <?php $query = $mysqli -> query ("SELECT horas FROM horarios");
                       while ($valores = mysqli_fetch_array($query)) {
                       echo '<option value="'.$valores[horas].'">'.$valores[horas].'</option>';}?>
                      </select>
                      
                </div>             
                
                <div class="form-group">
                  <label>Fecha:</label>
                  <input  name="fecha"  type="date" class="form-control" >
                </div>
                             
                 <div class="form-group">
                     <label>Comentario</label>
                     <input  name="comentario" type="text" class="form-control" >
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