<?php
require_once 'database.php';

class Usuario
{

  private $conexion;

  public $username;
  public $correo;
  public $contrasenia;
  public $nombre_usuario;
  public $descripcion;

public function __CONSTRUCT()
{
  try
  {
      $this->conexion = Database::Connexion();
  } catch (Exception $e)
  {
     die($e->getMessage());
  }
}


public function Ingresar()
{
  try
  {
      $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE username = ? AND contrasenia = ?");
      $sql->execute(array($this->username,$this->contrasenia));
      $obj = $sql->fetch(PDO::FETCH_OBJ);
      $this->username = $obj->username;
      $this->contrasenia = $obj->contrasenia;
      $this->correo = $obj->correo;
  }
  catch (Exception $e)
  {
      die($e->getMessage());
  }
}


public function Insertar()
{
  try 
  {

    $sql = $this->conexion->prepare("INSERT INTO usuario (username,correo,contrasenia) VALUES (?,?,?)");
    $sql->execute(array($this->username,$this->correo,$this->contrasenia));
    
  } catch (Exception $e)
  {
    die($e->getMessage());
  }
}

public function BuscarUsername()
{
  try
  {
    $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE username = ?");
    $sql->execute(array($this->username));
    $obj = $sql->fetch(PDO::FETCH_OBJ);

    $this->username = $obj->username;
    $this->correo = $obj->correo;
    $this->contrasenia = $obj->contrasenia;
    $this->nombre_usuario = $obj->nombre_usuario;
    $this->descripcion = $obj->descripcion;
  } 
  catch (Exception $e)
  {
    die($e->getMessage()); 
  }
}


public function Actualizar()
  {
    try {
      $sql = $this->conexion->prepare("UPDATE usuario SET correo = ?, contrasenia = ?, nombre_usuario = ?, descripcion = ?  WHERE username = ?");
      $sql->execute(array($this->correo,$this->contrasenia,$this->nombre_usuario,$this->descripcion,$this->username));
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }


}
?>
