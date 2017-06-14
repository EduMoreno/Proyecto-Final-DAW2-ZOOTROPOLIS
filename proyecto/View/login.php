<?php session_start(); ?>
<html>
	<head>
    <title>Zootropolis</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../View/CSS/Administrador/acceso.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
 
    
</head> 
		<body  style="background-image: url('aplicacion/images/fondologin.jpg');">

 <div id="form-main">
            <div id="form-div">
                <h2 style="color: white ; text-align: center; font-family: Comic sans ms;"> CONTROL DE ACCESO </h2>
				<form class="form" id="form1" name="login" action= "../Controller/login.php" method="post">

                    <p class="name">
                        <input  type="text"  name="username" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nombre" id="name" />
                    </p>

                    <p class="password">
                        <input type="password"   name="password" class="validate[required,custom[password]] feedback-input" id="password" placeholder="Contraseña" />
                    </p>

                    <div class="submit">
                        <input type="submit" name ="iniciar" value="Iniciar Sesion" id="button-blue"/>
						<a href="aplicacion/index.php"><input type="button" name ="cancelar" value="Cancelar" id="button-blue"/></a>
                        <div class="ease"></div>
                    </div>
                </form>
</div>
</div>
		<script src="assets/js/valida_login.js"></script>
	</body>
</html>