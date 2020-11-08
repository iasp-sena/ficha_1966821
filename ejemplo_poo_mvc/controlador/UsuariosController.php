<?php

class UsuariosController {

    public function listar(){
        
        $usuariosServicios = new UsuarioServicio();
        $usuarios = $usuariosServicios->consultarUsuarios();

        echo "Saludo desde usuarios controller...<br/>";
        var_dump($miUsuario);
        include(DIR_VIEW."usuarios/lista.php");
    }

    public function registro(){
        include(DIR_VIEW."usuarios/registro.php");
    }

    public function registrar(){
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->setNombres($_POST["nombres"]);
        $nuevoUsuario->setApellidos($_POST["apellidos"]);

        $usuariosServicios = new UsuarioServicio();
        $mensaje = $usuariosServicios->registrarUsuario($nuevoUsuario);
        
        //include(DIR_VIEW."/usuarios/registro_exitoso.php");
        include(DIR_VIEW."/usuarios/registro.php");
    }
}