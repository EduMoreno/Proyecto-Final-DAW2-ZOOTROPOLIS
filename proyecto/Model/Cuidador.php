<?php

class Cuidador {

  private $idcuidador;
  private $nombre;

  function __construct($idcuidador, $nombre) {
    $this->idcuidador = $idcuidador;
    $this->nombre = $nombre;
  }

  public function getIdCuidador() {
    return $this->idcuidador;
  }

  public function getNombreCuidador() {
    return $this->nombre;
  }

  public static function getListCuidador() {
    
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
 
    $seleccion = "SELECT idcuidador, nombre 
			FROM cuidadores
			ORDER BY nombre";
    $consulta = $conexion->query($seleccion);

    $listadoCuidador = [];

    while ($registro = $consulta->fetchObject()) {
       $listadoCuidador[] = new Cuidador($registro->idcuidador, $registro->nombre);
               
               
    }
   
    return  $listadoCuidador;
  }

}
