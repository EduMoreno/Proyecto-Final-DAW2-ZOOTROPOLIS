<?php
	require_once("../Controller/sesion.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{   
		
		$usuario = $_POST["usuario"];
		$password = $_POST["clave"];
	//validar usuario	
	validarUsuario($usuario,$password);  
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
	
			header("location: ../Controller/index.php");
		}
		else 
		{
	?>
      <script>
        alert("Usuario o contraseña incorrecta");
       </script> 
       <?php
		}
	}
	//Creo funcion para validar usuario
	function validarUsuario($usuario, $password)
	{		
		$conexion = new mysqli("localhost","root","","zoo");
		$consulta = "select clave from usuarios where nombre = '$usuario';";  				
		
		$result = $conexion->query($consulta);
			

		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["clave"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}

?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="CSS/Administrador/acceso.css">
</head>
<body style="background:url(aplicacion/images/zoo.jpg) no-repeat;background-size: cover;  height:100%; width:100%;">
   <div id="form-main">
            <div id="form-div">
                <h2 style="color: white ; text-align: center; font-family: Comic sans ms;"> CONTROL DE ACCESO </h2>
                <form class="form" id="form1" action="login_trabajo.php" method="post">

                    <p class="name">
                        <input  type="text"  name="usuario" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nombre" id="name" />
                    </p>

                    <p class="password">
                        <input type="password"   name="clave" class="validate[required,custom[password]] feedback-input" id="password" placeholder="Contraseña" />
                    </p>

                    <div class="submit">
                        <input type="submit" name ="iniciar" value="Iniciar Sesion" id="button-blue"/>
						<a href="aplicacion/index.php"><input type="button" name ="cancelar" value="Cancelar" id="button-blue"/></a>

                        <div class="ease"></div>
                    </div>
                </form>
                      <br>
            </div>
</body>
</html>