<?php
class Database{

  public static function Connexion()
  {
    $conexion = new PDO('mysql:host=localhost;dbname=photo','root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conexion;
  }

}
?>
