<?php

class LoginController {

    private static $usuarioServicio;
    private static $template;

    public function __construct(){
        self::$usuarioServicio = new UsuarioServicio();
        self::$template = new TemplateLogin();
    }

    public function ingresar(){
        $nombreUsuario = filter_input(INPUT_POST, "nombreUsuario");
        $clave =  filter_input(INPUT_POST, "clave");
        $mensaje = null;

        if($nombreUsuario && $clave) {
            $usuario = self::$usuarioServicio->consultarPorUsuarioYClave($nombreUsuario, $clave);
            if($usuario){
                $usuario->setClave(null);
                $_SESSION["user"] = serialize($usuario);
                redirect("Usuarios", "listar");
                return;
            }
            $mensaje = "Verifique sus credenciales...";
        }

        self::$template->render(
            ["titulo"=>"Login", "mensaje"=>$mensaje]
        );
    }

    public function salir(){
        session_destroy();
        redirect("Login", "ingresar");
    }

}