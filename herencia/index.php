<?php
require_once("modelo/Usuario.php");
require_once("modelo/Administrativo.php");

require_once("modelo/Instructor.php");
require_once("modelo/Aprendiz.php");
require_once("modelo/Coordinador.php");
require_once("modelo/RecursoHumano.php");


//$objUsuario = new Usuario();
//$objAdministrativo = new Administrativo();


//$objInstructor = new Instructor();
//$objAprendiz = new Aprendiz();
$objCoordinador = new Coordinador();
$objRecursoHumano = new RecursoHumano();

//$objInstructor->ingresar();
//$objAprendiz->ingresar();
/*
$objCoordinador->ingresar();
$objRecursoHumano->ingresar();

$objCoordinador->retirar();
$objRecursoHumano->retirar();
*/
$objCoordinador->setSalario(1000);
$objRecursoHumano->setSalario(3000);



//$objCoordinador->setPropiedadClase(222222);
Administrativo::setPropiedadClaseStatic(222222);
$objCoordinador->saludar();
$objRecursoHumano->saludar();
echo("$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br/>");

//$objRecursoHumano->setPropiedadClase(444444);
Administrativo::setPropiedadClaseStatic(4444444);
$objCoordinador->saludar();
$objRecursoHumano->saludar();