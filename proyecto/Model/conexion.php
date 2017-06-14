<?php
abstract class Zoo {

  public static function conectar() {
    try {
      $conectar = new PDO("mysql:host=localhost;dbname=zoo;charset=utf8", 'root', ''); 
    } catch (PDOException $e) {
      echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
      die ("Error: " . $e->getMessage());
    }

    return $conectar;
  }
}