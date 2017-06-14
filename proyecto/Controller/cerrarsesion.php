<?php
	require_once("sesion.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");	
	if( $usuario == false )
	{	
		header("Location: /View/login.php");
	}
	else 
	{
		$usuario = $sesion->get("usuario");	
		$sesion->termina_sesion();	
		header("location: ../View/aplicacion/index.php");
	}
?>