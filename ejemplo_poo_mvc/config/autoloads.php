<?php
function autoloadControllers($nombreControlador){
    $rutaArchivoControlador = DIR_CONTROLLER . $nombreControlador . ".php";
    //echo("Vamos a cargar el controlador automáticamente... $nombreControlador <br/>");
    //echo("Ruta: $rutaArchivoControlador <br/>");
    if(file_exists($rutaArchivoControlador)){
        require_once($rutaArchivoControlador);
    }
}

function autoloadModelo($nombreClaseModelo){
    $rutaArchivoModelo = DIR_MODEL . $nombreClaseModelo . ".php";
    //echo("Vamos a cargar el modelo automáticamente... $nombreClaseModelo <br/>");
    //echo("Ruta: $rutaArchivoModelo <br/>");
    if(file_exists($rutaArchivoModelo)){
        require_once($rutaArchivoModelo);
    }
}

function autoloadServicios($nombreServicio){
    $rutaArchivoSerivio = DIR_SERVICE . $nombreServicio . ".php";
    //echo("Vamos a cargar el modelo automáticamente... $nombreServicio <br/>");
    //echo("Ruta: $rutaArchivoSerivio <br/>");
    if(file_exists($rutaArchivoSerivio)){
        require_once($rutaArchivoSerivio);
    } else{
        die("Error al cargar el servicio $nombreServicio");
    }
}

spl_autoload_register("autoloadControllers");
spl_autoload_register("autoloadModelo");
spl_autoload_register("autoloadServicios");