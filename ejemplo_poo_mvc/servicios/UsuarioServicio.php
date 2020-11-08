<?php

class UsuarioServicio {

    public function consultarUsuarios(){

        $miUsuario = new Usuario();
        $miUsuario->setId(1); 
        $miUsuario->setNombres("Carlos");
        $miUsuario->setApellidos("Ramirez");

        $miUsuario2 = new Usuario();
        $miUsuario2->setId(2); 
        $miUsuario2->setNombres("Daniela");
        $miUsuario2->setApellidos("Gómez");

        $usuarios = [];
        array_push($usuarios, $miUsuario);
        array_push($usuarios, $miUsuario2);

        return $usuarios;
    }

    public function registrarUsuario($usuario){
        echo("Registramos el usuario....");
        var_dump($usuario);
        return "Se ha registrado el usuario correctamente.";
    }
}