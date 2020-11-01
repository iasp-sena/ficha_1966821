<?php
define("NOMBRES", ["Carlos", "Andres", "Diana", "Julián", "Pedro", "Gabriel", "Dario", "Daniel", "Carolina"]);
define("POSICIONES", ["Arquero","Defensa","Lateral","Medio","Delantero"]);

function crearJugador($numero, $nombre, $posicion){
    return [
        "numero"    =>$numero,
        "nombre"    =>$nombre,
        "posicion"  =>$posicion
    ];
}

function getNombreAleatorio(){
    $numeroPosicionNombre = rand(0, sizeof(NOMBRES)-1);
    return NOMBRES[$numeroPosicionNombre];
}

function getPosicionAleatoria(){
    $numeroPosicion = rand(0, sizeof(POSICIONES)-1);
    return POSICIONES[$numeroPosicion];
}

function crearEquipo($cantidadJugadores){
    $jugadores = [];

    for($i=0; $i<$cantidadJugadores; $i++){
        $nuevoJugador = crearJugador($i, getNombreAleatorio(), getPosicionAleatoria());
        array_push($jugadores, $nuevoJugador);
    }

    return $jugadores;
}
