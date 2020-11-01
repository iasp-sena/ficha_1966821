<?php
require_once("Administrativo.php");

class Coordinador extends Administrativo {

    public function retirar(){
        $this->salario = 3000;
        parent::saludar();
        echo("Retiramos desde Coordinador.... Con salario: " . $this->salario . "<br/>");
    }

}