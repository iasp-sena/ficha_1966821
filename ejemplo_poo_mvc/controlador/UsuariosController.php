<?php

class UsuariosController {

    private static $usuariosServicios;
    private static $tdServicio;
    private static $template;

    public function __construct(){
        self::$usuariosServicios = new UsuarioServicio();
        self::$tdServicio = new TipoDocumentoServicio();
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
        $tiposDocs = self::$tdServicio->consultarTodos();

        self::$template->render(
            DIR_VIEW."usuarios/registro.php",
            ["titulo"=>"Registro usuario nuevo",
            "tiposDocumentos"=>$tiposDocs
            ]
        );
    }

    public function registrar(){
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->setTipoDocumento($_POST["tipoDocumento"]);
        $nuevoUsuario->setNumeroDocumento($_POST["numeroDocumento"]);
        $nuevoUsuario->setNombres($_POST["nombres"]);
        $nuevoUsuario->setApellidos($_POST["apellidos"]);
        $nuevoUsuario->setNombreUsuario($_POST["nombreUsuario"]);
        $nuevoUsuario->setClave($_POST["clave"]);

        $mensaje = self::$usuariosServicios->registrarUsuario($nuevoUsuario);
        
        //include(DIR_VIEW."/usuarios/registro_exitoso.php");
        self::$template->render(
            DIR_VIEW."usuarios/registro.php",
            ["titulo"=>"Registro usuario nuevo", "mensaje"=>$mensaje]
        );
    }
}