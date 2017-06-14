<?php
require_once '../Model/Contenido.php';

$fecha1 = "$_POST[fechaAltaModificar]";
$fecha2 = date("y-m-d", strtotime($fecha1));
Contenido::update($_POST['idModificar'],$_POST['nombreModificar'], $fecha2, $_POST['generoModificar'],$_POST['edadModificar'], $_POST['provinciaModificar'],$_POST['tipoModificar'],$_POST['cuidadorModificar']);

