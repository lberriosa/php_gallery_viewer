<?php
$controller = 'usuario';
if(!isset($_REQUEST['c']))
{
    require_once "../Controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;
    $controller->Inicio();
}
else
{
    $controller = strtolower($_REQUEST['c']);
    $accion = $_REQUEST['a'];
    require_once "../Controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;

    call_user_func(array($controller,$accion));
}

?>
