<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    protected static $propiedadClase;

    protected $salario;

    public function saludar(){
        echo("Saludando.....<br/>");
        echo("Salario: " . $this->salario . "<br/>");
        echo("Prop. Clase: " . self::$propiedadClase . "<br/>");
    }
    
    public function ingresar(){
        echo("Ingresamos desde Administrativo....<br/>");
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($nuevoSalario){
        $this->salario = $nuevoSalario;
    }

    public function setPropiedadClase($nuevoValor){
        //Administrativo::$propiedadClase
        self::$propiedadClase = $nuevoValor;
    }

    public static function setPropiedadClaseStatic($nuevoValor){
        //Administrativo::$propiedadClase
        self::$propiedadClase = $nuevoValor;
    }

    public abstract function retirar();

}