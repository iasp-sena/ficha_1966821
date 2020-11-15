<?php
define("CONTEXT_ROOT","/1966821/ejemplo_poo_mvc");
define("DOCUMENT_ROOT",$_SERVER["DOCUMENT_ROOT"].CONTEXT_ROOT);

define("DIR_CONTROLLER",DOCUMENT_ROOT."/controlador/");
define("DIR_MODEL",DOCUMENT_ROOT."/modelo/");
define("DIR_VIEW",DOCUMENT_ROOT."/vista/");
define("DIR_SERVICE",DOCUMENT_ROOT."/servicios/");




require_once("autoloads.php");
require_once("funciones.php");