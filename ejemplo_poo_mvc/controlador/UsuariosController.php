<?php

class UsuariosController {

    private static $usuariosServicios;
    private static $template;

    public function __construct(){
        self::$usuariosServicios = new UsuarioServicio();
        self::$template = new Template();
    }

    public function listar(){
        $usuarios = self::$usuariosServicios->consultarUsuarios();

        self::$template->render(
            DIR_VIEW."usuarios/lista.php",
            ["titulo"=>"Lista usuarios","users"=>$usuarios]
        );
    }

    public function registro(){
        self::$template->render(
            DIR_VIEW."usuarios/registro.php",
            ["titulo"=>"Regirtro usuario nuevo"]
        );
    }

    public function registrar(){
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->setNombres($_POST["nombres"]);
        $nuevoUsuario->setApellidos($_POST["apellidos"]);

        $mensaje = self::$usuariosServicios->registrarUsuario($nuevoUsuario);
        
        //include(DIR_VIEW."/usuarios/registro_exitoso.php");
        self::$template->render(
            DIR_VIEW."usuarios/registro.php",
            ["titulo"=>"Regirtro usuario nuevo", "mensaje"=>$mensaje]
        );
    }
}