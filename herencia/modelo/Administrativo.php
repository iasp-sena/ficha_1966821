<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    protected $salario;

    public function saludar(){
        echo("Saludando.....");
    }
    
    public function ingresar(){
        echo("Ingresamos desde Administrativo....<br/>");
    }

    public abstract function retirar();

}