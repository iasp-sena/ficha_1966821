<?php

require_once("modelo/Jugador.php");
require_once("modelo/Equipo.php");

$miEquipo = new Equipo("Los Magnificos");

//nombreObjeto = new Clase();
//$jugador->posicion = "Delantero";
//$jugador->nombre = "Andrés";
//$jugador->numero = 10;
$jugador = new Jugador(11, "Andrés", "Medio");
$jugador2 = new Jugador(10, "Carlos");
$jugador3 = new Jugador(9);
//$jugador->setNumero(10);
//$jugador->setNombre("Carlos");
//$jugador->setPosicion("Defensa");

$miEquipo->addJugador($jugador);
$miEquipo->addJugador($jugador2);
$miEquipo->addJugador($jugador3);


echo $miEquipo->getNombre() . "<br/>";
echo "----------------------------------------------------------------------------------------<br/>";
/*
echo $jugador->getNumero() .  " - " . $jugador->getNombre() .  " - " . $jugador->getPosicion() . "<br/>";
echo $jugador2->getNumero() .  " - " . $jugador2->getNombre() .  " - " . $jugador2->getPosicion() . "<br/>";
*/

foreach($miEquipo->getJugadores() as $j){
    echo $j->getNumero() .  " - " . $j->getNombre() .  " - " . $j->getPosicion() . "<br/>";
}
