<?php

class Tipo {

  private $idtipo;
  private $nombre;

  function __construct($idtipo, $nombre) {
    $this->idtipo = $idtipo;
    $this->nombre = $nombre;
  }

  public function getIdTipo() {
    return $this->idtipo;
  }

  public function getNombreTipo() {
    return $this->nombre;
  }

  public static function getListTipo() {
    
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
 
    $seleccion = "SELECT idtipo, nombre 
			FROM tipo
			ORDER BY nombre";
    $consulta = $conexion->query($seleccion);

    $listadoTipo = [];

    while ($registro = $consulta->fetchObject()) {
       $listadoTipo[] = new Tipo($registro->idtipo, $registro->nombre);
               
               
    }
   
    return  $listadoTipo;
  }

}
