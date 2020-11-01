<?php

class Jugador {

    private $numero;
    private $nombre;
    private $posicion;

    public function Jugador($numero = null, $nombre = null, $posicion = null){
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->posicion = $posicion;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setPosicion($posicion){
        $this->posicion = $posicion;
    }

    public function getPosicion(){
        return $this->posicion;
    }

}