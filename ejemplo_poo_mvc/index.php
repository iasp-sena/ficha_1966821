<?php
require("./config/init.php");
/*
$nombrePropiedad = "apellido"
$obj = new Usuario();
$obj->$nombrePropiedad;
$obj->apellido;
*/

$nombreControlador = $_GET["controller"] ?? $_POST["controller"];
$nombreMetodo = $_GET["method"] ?? $_POST["method"];
if($nombreControlador){
    $nombreControlador .= "Controller";
    
    $controlador = new $nombreControlador();

    if(method_exists($controlador, $nombreMetodo)){
        $controlador->$nombreMetodo();
    } else{
        echo "La función solicitada no existe";
    }

} else{
    echo "error no a estipulado el controlador...";
}