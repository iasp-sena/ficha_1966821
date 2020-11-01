<?php
require_once('Usuario.php');

class Instructor implements Usuario {

    public function ingresar(){
        echo("Ingresamos desde Instructor....<br/>");
    }

}