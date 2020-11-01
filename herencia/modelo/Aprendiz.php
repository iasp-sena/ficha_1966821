<?php
require_once("Usuario.php");

class Aprendiz implements Usuario {

    public function ingresar(){
        echo("Ingresamos desde Aprendiz....<br/>");
    }

}