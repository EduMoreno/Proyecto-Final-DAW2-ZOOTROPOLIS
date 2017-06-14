<?php
require_once '../Model/Contenido.php';

$fecha1 = "$_POST[fechaAlta]"; 
$fecha2 = date("y-m-d", strtotime($fecha1));

Contenido::insert($_POST['nombreAlta'],$fecha2 ,$_POST['generoAlta'],$_POST['edadAlta'],$_POST['provinciaAlta'],$_POST['tipoAlta'],$_POST['cuidadorAlta']);
