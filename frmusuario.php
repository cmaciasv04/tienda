<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Bienvenido</title>
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




<div class="smoke">
    <div class="container" id="fh5co-contact">
      <div class="wordpress-bg text-center animate-box" data-animate-effect="fadeInUpBig">
        <div><h1 class="text-white">Paz y Energia</h1></div>
    </div>
    </div>
</div>


 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <div class="container">
            <a class="navbar-brand" href="#">Cambio de Contraseña<span class="navbar-brand2"></span></a>
            </div> 
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Contraseña antigua:</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>Nueva contraseña :</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>Repita nueva password :</label>
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
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
</body>