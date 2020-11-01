<?php
require_once("modelo/Usuario.php");
require_once("modelo/Administrativo.php");

require_once("modelo/Instructor.php");
require_once("modelo/Aprendiz.php");
require_once("modelo/Coordinador.php");
require_once("modelo/RecursoHumano.php");


//$objUsuario = new Usuario();
//$objAdministrativo = new Administrativo();


$objInstructor = new Instructor();
$objAprendiz = new Aprendiz();
$objCoordinador = new Coordinador();
$objRecursoHumano = new RecursoHumano();

$objInstructor->ingresar();
$objAprendiz->ingresar();
$objCoordinador->ingresar();
$objRecursoHumano->ingresar();

$objCoordinador->retirar();
$objRecursoHumano->retirar();