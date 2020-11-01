<?php

class Equipo {

    private $nombre = "";
    private $jugadores = [];

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function __destruct(){
        echo "Se está destruyendo el objeto de Equipo...." . $this->nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getJugadores(){
        return $this->jugadores;
    }

    public function addJugador($jugador){
        array_push($this->jugadores, $jugador);
    }

}