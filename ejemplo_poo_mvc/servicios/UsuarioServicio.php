<?php

class UsuarioServicio {

    public function consultarUsuarios(){
        $usuarios = [];
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("SELECT u.*, td.codigo as td_codigo, td.descripcion as td_descripcion FROM tbl_usuarios u INNER JOIN tbl_tipos_documentos td ON u.tipo_documento_id = td.id");
        //$stm->setFetchMode(PDO::FETCH_CLASS,'Usuario');
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($usuarios, $this->toUsuario($fila));
                
                //print_r($fila);
                //echo "<br/>...... ".$fila->nombres." ......<br/>";

                //print_r($fila);
                //echo "<br/>...... ".$fila["nombres"]." ......<br/>";
                //echo "<br/>...... ".$fila->getNombres()." ......<br/>";
            }
        }


        return $usuarios;
    }

    public function registrarUsuario($usuario){
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("INSERT INTO tbl_usuarios(tipo_documento_id, numero_documento, nombres, apellidos, nombre_usuario, clave) VALUES (:tipo_documento_id, :numero_documento, :nombres, :apellidos, :nombre_usuario, MD5(:clave) )");
        $stm->bindValue(":tipo_documento_id", $usuario->getTipoDocumento(), PDO::PARAM_INT);
        $stm->bindValue(":numero_documento", $usuario->getNumeroDocumento(), PDO::PARAM_STR);
        $stm->bindValue(":nombres", $usuario->getNombres(), PDO::PARAM_STR);
        $stm->bindValue(":apellidos", $usuario->getApellidos(), PDO::PARAM_STR);
        $stm->bindValue(":nombre_usuario", $usuario->getNombreUsuario(), PDO::PARAM_STR);
        $stm->bindValue(":clave", $usuario->getClave(), PDO::PARAM_STR);

        $mensaje = $stm->execute() ? "Se ha registrado el usuario correctamente.": "Error registrando el usuario";

        return $mensaje;
    }


    private function toUsuario($datosUsuario){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($datosUsuario->tipo_documento_id);
        $tipoDocumento->setCodigo($datosUsuario->td_codigo);
        $tipoDocumento->setDescripcion($datosUsuario->td_descripcion);


        $usuario = new Usuario();
        $usuario->setId($datosUsuario->id);
        $usuario->setTipoDocumento($tipoDocumento);
        $usuario->setNumeroDocumento($datosUsuario->numero_documento);
        $usuario->setNombres($datosUsuario->nombres);
        $usuario->setApellidos($datosUsuario->apellidos);
        $usuario->setNombreUsuario($datosUsuario->nombre_usuario);
        $usuario->setClave($datosUsuario->clave);

        return $usuario;
    }
}