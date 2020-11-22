<?php

class Session {

    private function __construct(){}

    public static function puedeAcceder($controlador, $metodo){
        if(!self::esRecursoPulbico($controlador, $metodo)){
            if(!isset($_SESSION["user"])){
                redirect("Login", "ingresar");
                return false;
            }
        }
        return true;
    }

    private static function esRecursoPulbico($controlador, $metodo){
        foreach(PUBLIC_CONTROLLERS as $controller => $methods){
            if($controller == $controlador && in_array($metodo, $methods)){
                return true;
            }
        }
        return false;
    }

    public static function getUser(){
        return unserialize($_SESSION["user"]);
    }

}