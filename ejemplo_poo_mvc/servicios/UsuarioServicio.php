<?php

class UsuarioServicio {

    public function consultarUsuarios(){
        $usuarios = [];
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("SELECT * FROM tbl_usuarios");
        //$stm->setFetchMode(PDO::FETCH_CLASS,'Usuario');
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($usuarios, $this->toUsuario($fila));
                
                //print_r($this->toUsuario($fila));
                //echo "<br/>...... ".$fila->nombres." ......<br/>";

                //print_r($fila);
                //echo "<br/>...... ".$fila["nombres"]." ......<br/>";
                //echo "<br/>...... ".$fila->getNombres()." ......<br/>";
            }
        }


        return $usuarios;
    }

    public function registrarUsuario($usuario){
        echo("Registramos el usuario....");
        var_dump($usuario);
        return "Se ha registrado el usuario correctamente.";
    }


    private function toUsuario($datosUsuario){
        $usuario = new Usuario();
        $usuario->setId($datosUsuario->id);
        $usuario->setNombres($datosUsuario->nombres);
        $usuario->setApellidos($datosUsuario->apellidos);
        $usuario->setNombreUsuario($datosUsuario->nombre_usuario);

        return $usuario;
    }
}