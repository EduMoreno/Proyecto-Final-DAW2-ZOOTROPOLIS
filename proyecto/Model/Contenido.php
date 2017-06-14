<?php

class Contenido {

  private $id;
  private $nombre;
  private $fecha;
  private $genero;
  private $edad;
  private $provincia;
  private $tipo;
  private $nombreTipo;
  private $cuidador;
  private $nombreCuidador;
 
 function __construct($idanimal, $nombre, $fecha_alta,$genero,$edad,$provincia,$tipo,$nombreTipo,$cuidador,$nombreCuidador) {
    $this->id = $idanimal;
	$this->nombre = $nombre;
    $this->fecha = $fecha_alta;
    $this->genero = $genero;
    $this->edad = $edad;
    $this->provincia = $provincia;
    $this->tipo = $tipo;
    $this->nombreTipo=$nombreTipo;
	$this->cuidador = $cuidador;
    $this->nombreCuidador=$nombreCuidador;
   
  }

  public function getId() {
    return $this->id;
  }

   public function getNombre() {
    return $this->nombre;
  }
  public function getFechaAlta() {
    return $this->fecha;
  }

   public function getGenero() {
    return $this->genero;
  }
  
  public function getEdad() {
    return $this->edad;
  }
  
   public function getProvincia() {
    return $this->provincia;
  }
  
  public function getTipo() {
    return $this->tipo;
  }
   
  public function getNombreTipo() {
    return $this->nombreTipo;
  }

    public function getCuidador() {
    return $this->cuidador;
  }
   
  public function getNombreCuidador() {
    return $this->nombreCuidador;
  }

//Insertar
  public static function insert($nombreAlta,$fecha2 ,$generoAlta,$edadAlta,$provinciaAlta,$tipoAlta,$cuidadorAlta) {
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
    $insertar = "INSERT INTO animal (nombre,fecha,genero,edad,provincia,idtipo,idcuidador) "
            . "VALUES (\"" .$nombreAlta . "\", \"" .$fecha2 . "\", \"" . $generoAlta . "\", \"" . $edadAlta . "\", \"" . $provinciaAlta . "\", \"" . $tipoAlta . "\", \"" .$cuidadorAlta . "\")";
    var_dump($insertar);
	echo "prueba";
	$conexion->exec($insertar);
  }

//Modificar
  public static function update($idModificar,$nombreModificar,$fecha2,$generoModificar,$edadModificar,$provinciaModificar,$tipoModificar,$cuidadorModificar) {
    require_once 'conexion.php';
    $conexion = Zoo::conectar();

    $modificar = "UPDATE animal SET  idanimal=\"$idModificar\",nombre=\"$nombreModificar\",fecha=\"$fecha2\",genero=\"$generoModificar\",edad=\"$edadModificar\",provincia=\"$provinciaModificar\",idtipo=\"$tipoModificar\",idcuidador=\"$cuidadorModificar\" WHERE idanimal=\"$idModificar\"";
    echo $modificar. " Esta es la consulta";
    $conexion->exec($modificar);
  }

//Borrar
  public function delete() {
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
    $borrar = "DELETE FROM animal WHERE idanimal=" . $this->id;
    echo $borrar;
    $conexion->exec($borrar);
  }

  public static function contador() {
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
    $count_query = $conexion->query("SELECT * FROM animal");
    $numrows = $count_query->rowCount();
    return $numrows;
  }


public static function getListZoo($o,$f,$buscar) {
    $ordenar=$o;
    $forma=$f;
    require_once 'conexion.php';
    $conexion = Zoo::conectar();
    include 'paginacion.php'; 
    include 'lista.php';
		if((isset($buscar)) && $buscar != null && $buscar != ""){
	 
	$seleccion = "SELECT a.idanimal, a.nombre, DATE_FORMAT(a.fecha,'%d/%m/%Y') as fecha, a.genero, a.edad, a.provincia, t.idtipo, t.nombre as nombretipo, c.idcuidador, c.nombre as nombrecuidador FROM animal a

INNER JOIN cuidadores c ON a.idcuidador = c.idcuidador

INNER JOIN tipo t ON a.idtipo = t.idtipo WHERE a.idanimal LIKE '%".$buscar."%' OR a.nombre LIKE '%".$buscar."%' OR a.fecha LIKE '%".$buscar."%' OR a.genero  LIKE '%".$buscar."%' OR a.edad  LIKE '%".$buscar."%' OR a.provincia LIKE '%".$buscar."%' OR t.nombre LIKE '%".$buscar."%' OR c.nombre  LIKE '%".$buscar."%' " ;

		}else{
			$seleccion = "SELECT a.idanimal, a.nombre, DATE_FORMAT(a.fecha,'%d/%m/%Y') as fecha,a.genero,a.edad,a.provincia,a.idtipo, a.idcuidador, c.nombre as nombretipo, p.nombre as nombrecuidador FROM animal a , tipo c , cuidadores p WHERE a.idtipo = c.idtipo AND a.idcuidador = p.idcuidador ORDER BY  $ordenar $forma LIMIT $offset,$per_page";
		}
	
    
	$consulta = $conexion->query($seleccion);  
	
    $lista = [];
	
	
    while ($registro = $consulta->fetchObject()) {

      $lista[] = new contenido($registro->idanimal, $registro->nombre, $registro->fecha, $registro->genero, $registro->edad, $registro->provincia, $registro->idtipo, $registro->nombretipo, $registro->idcuidador, $registro->nombrecuidador);
    }
   
    return $lista;
  } 

  

}


