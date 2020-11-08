<?php
require("./config/init.php");
/*
$nombrePropiedad = "apellido"
$obj = new Usuario();
$obj->$nombrePropiedad;
$obj->apellido;
*/


$nombreControlador = $_GET["controller"];
$nombreMetodo = $_GET["method"];
if($nombreControlador){
    $nombreControlador .= "Controller";
    $rutaArchivoControlador = "./controlador/".$nombreControlador.".php";

    if(file_exists($rutaArchivoControlador)){
        require_once($rutaArchivoControlador);
    
        $controlador = new $nombreControlador();
    
        $controlador->saludar();
    } else{
        echo "error controlador no existe..";
    }
} else{
    echo "error no a estipulado el controlador...";
}