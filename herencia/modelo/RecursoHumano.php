<?php
require_once("Administrativo.php");

class RecursoHumano extends Administrativo {
    
    public function ingresar(){
        echo("Ingresamos desde RecursoHumano....<br/>");
    }

    public function retirar(){
        echo("Retiramos desde RecursoHumano....<br/>");
    }
}