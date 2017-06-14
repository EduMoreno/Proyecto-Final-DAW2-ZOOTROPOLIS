<?php

require_once '../Model/Contenido.php';
$Animal_Borrar = new Contenido($_GET['idanimal']);
$Animal_Borrar->delete();
