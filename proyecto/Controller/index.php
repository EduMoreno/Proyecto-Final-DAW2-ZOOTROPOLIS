<?php

require_once("../Controller/sesion.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{
      ?>
       
       <?php
		header("Location: ../View/login_trabajo.php");		
	}
	else 
            
	{

	         
   ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Zootropolis</title>
<link href="../View/aplicacion/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="../View/aplicacion/css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../view/aplicacion/images/favicon.ico">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="../View/aplicacion/js/jquery-1.11.1.min.js"></script>
<script src="../View/aplicacion/js/bootstrap.js"></script>
<link rel="stylesheet" href="../View/CSS/Administrador/style.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="../Controller/js/main.js"></script>
	<link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
   
  </head>
  <body>
  <div class="header-top">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
						<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Navegacion</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									  </button>
									  <div>
	  
									<div class="navbar-brand" style="display: inline-block; margin-right: 35px;">

					<span style="text-align:left; font-size:35px; color:grey; display: inline-block;"><b>Hola, <?php echo $sesion->get("usuario"); ?></b></li>

									</div>
									
							 <span><img  style="display: inline-block;height: 49px; float:right; margin-left: -49px;margin-top: -8px;" src="../View/aplicacion/images/logo.svg" alt="icon"></span>

								</div>
								</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
									<li class="active"><a href="index.php">Inicio</a></li>
									<li><a href="../calendario/index.php">Eventos</a></li>
									<li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
					 		</ul>
							  
							</div>
  </div>
						</nav>

					</div>
				
			<br> <br> <br> <br> 
	  <?php
	  	if (($usuario=="Administrador")||($usuario=="administrador")){
			?>
<div> 
    <div style="cursor:pointer; width:100px; margin-left: 10%; margin-right:20%; display:inline-block;"><img src="../View/aplicacion/images/nuevo.png" width="30" height="30" id="nuevo" title="Nuevo Animal"></div>

    <div id="seleccion" style="display:inline-block; margin-right:20%;"> <b>Ordenar por</b>  <select name="campos" id="campos">
      <option value="1">Codigo</option>
      <option value="2">Fecha</option>
      <option value="6">Tipo</option>
    </select>
        
      <select name="forma" id="forma">
      <option value="ASC">Asc</option>
      <option value="DESC">Desc</option>
  
    </select></div>
	
    <div class="input-group" style="width: 200px; margin-bottom: -14px; display:inline-block;">
			<input name="search_text" id="search_text" placeholder="Buscar" class="form-control" style="width: 200px;" type="text"> 
  </div>

 <br>
	</div>
	<?php
		}
		?>
		
     <div class="row">
        <div class="col-xs-12">

        <div class="listar"></div> 
        </div>

      </div>

      <!-- Dialogo Borrar Animal -->
      <div id="dialogoborrar" class="dialogo" title="Eliminar Animal">
        <p>¿Esta seguro que desea eliminar este Animal?</p>
      </div>
       <?php
     require_once '../Model/Cuidador.php';
     $data['listadoCuidador'] = Cuidador::getListCuidador();
     require_once '../Model/Tipo.php';
     $data['listadoTipo'] = Tipo::getListTipo();
     
     ?>
      <!-- Dialogo Modificar Animal-->
      <div id="dialogomodificar" class="dialogo" title="Modificar Animal">
        <?php include "../View/Formulario_modificar.php";
        ?>
      </div>
      
      <!-- Dialogo Añadir Animal -->
      <div id="dialogoalta" class="dialogo" title="Nuevo Animal">
        <?php include "../View/Formulario_alta.php";?>
      </div>

    </div>
  </body>
</html>


<?php
	}
?>
