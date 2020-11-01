<?php

function mostrarInformacionEquipo($equipo){
    foreach($equipo as $jugador){
        echo "Número: ". $jugador["numero"] . "<br/>";
        echo "Nombre: ". $jugador["nombre"] . "<br/>";
        echo "Posición: ". $jugador["posicion"] . "<br/>";
        echo "******************************************************<br/>";
    }
}