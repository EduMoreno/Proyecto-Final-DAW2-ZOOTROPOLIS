<?php session_start(); ?>
<html>
	<head>
    <title>Zootropolis</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- CSS Global  -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!--  CSS  -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="CSS/Administrador/acceso.css">
	<link href="aplicacion/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="aplicacion/css/style.css" rel="stylesheet" type="text/css" media="all" />

    
</head> 
	<body  style="background-image: url('aplicacion/images/fondoregistro.jpg');>
<div class="container">

					
<div id="form-main">
            <div id="form-div">
                <h2 style="color: white ; text-align: center; font-family: Comic sans ms;"> Registro </h2>
				<br>
		<form role="form" name="registro" id="form1" action="../Controller/registro.php" method="post">
		  <div class="form-group">
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		 <a href="aplicacion/index.php"> <button type="button" class="btn btn-default">Cancelar</button></a>

		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>