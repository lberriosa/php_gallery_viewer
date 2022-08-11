<?php
require_once '../Model/usuario.php';

class UsuarioController
{
    private $usuario_model;

    public function __CONSTRUCT()
    {
      try
      {
        $this->usuario_model = new usuario();
      } catch (Exception $e)
      {
        die($e->getMessage());
      }
    }

    public function Inicio()
    {
        require_once '../View/login.php';
    }

    public function Menu()
    {
      $username = $_REQUEST['username'];
      $this->usuario_model->username = $username;
      
      session_start();
      require_once '../view/header.php';
      require_once '../view/inicio.php';
      require_once '../view/footer.php';
    }

    public function Nuevo()
    {
        require_once '../View/register.php';
    }

    public function Ingresar()
    {
      $username = $_REQUEST['your_name'];
      $contrasenia = $_REQUEST['your_pass'];
      $this->usuario_model->username = $username;
      $this->usuario_model->contrasenia = $contrasenia;
      $this->usuario_model->Ingresar();
      if($this->usuario_model->username == null)
      {
        header('location:index2.php?usuario=0');
      }
      else {
        session_start();
        require_once '../view/header.php';
        require_once '../view/inicio.php';
        require_once '../view/footer.php';
      }
    }

    public function Salir()
    {
      session_destroy();
      header('location:../index.php');
    }

    public function Agregar()
    {
      $this->usuario_model->username = $_REQUEST['name'];
      $this->usuario_model->correo = $_REQUEST['email'];
      $this->usuario_model->contrasenia = $_REQUEST['pass'];
      
      $this->usuario_model->Insertar();

      header('location:index2.php?c=Usuario&a=Inicio&creado=1');
    }

    public function Editar()
    { 
      $username = $_REQUEST['username'];
      $this->usuario_model->username = $username;
      $this->usuario_model->BuscarUsername();
      
      session_start();
      require_once '../view/header.php';
      require_once '../view/editar.php';
      require_once '../view/footer.php';
    }

    public function Subir()
    {
      $username = $_REQUEST['username'];
      $this->usuario_model->username = $username;
      
      session_start();
      require_once '../view/header.php';
      require_once '../view/post.php';
      require_once '../view/footer.php';
    }


    public function ReIngresar()
    {
      $this->usuario_model->username = $_REQUEST['username'];
      $this->usuario_model->contrasenia = $_REQUEST['pass'];
      $this->usuario_model->Ingresar();
      if($this->usuario_model->username == null)
      {
        header('location:index2.php?usuario=0');
      }
      else {
        session_start();
        require_once '../view/header.php';
        require_once '../view/inicio.php';
        require_once '../view/footer.php';
      }
    }


    public function Modificar()
    {
      $this->usuario_model->username = $_REQUEST['username'];
      $this->usuario_model->correo = $_REQUEST['email'];
      $this->usuario_model->contrasenia = $_REQUEST['pass'];
      $this->usuario_model->nombre_usuario = $_REQUEST['realname'];
      $this->usuario_model->descripcion = $_REQUEST['message'];

      $this->usuario_model->Actualizar();
      {
        session_start();
        require_once '../view/header.php';
        require_once '../view/inicio.php';
        require_once '../view/footer.php';
      }
    }

}

?>
