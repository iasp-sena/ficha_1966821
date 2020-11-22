<?php

class TipoDocumentoServicio {

    public function consultarTodos(){
        $tiposDocumentos = [];
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("SELECT * FROM tbl_tipos_documentos td");
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($tiposDocumentos, $this->toTipoDocumento($fila));
            }
        }


        return $tiposDocumentos;
    }

    private function toTipoDocumento($datos){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($datos->id);
        $tipoDocumento->setCodigo($datos->codigo);
        $tipoDocumento->setDescripcion($datos->descripcion);

        return $tipoDocumento;
    }
}