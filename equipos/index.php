<?php
session_start();
//$_GET
//$_POST
//$_SESSION

var_dump($_GET);
echo "<br/>";
var_dump($_POST);
echo "<br/>";
echo "SESSION: "; var_dump($_SESSION);
echo "<br/>";
var_dump($_SERVER);
echo "<br/>";

$cantidadJugadores = (int) ($_POST["cantidadJugadores"] ?? $_SESSION["ultimoDatoCantidadJugadores"]); //$_GET["cantidadJugadores"];

var_dump($cantidadJugadores);

if ($cantidadJugadores && $cantidadJugadores > 0) {
    $_SESSION["ultimoDatoCantidadJugadores"] = $cantidadJugadores;
    require "logica_equipo.php";
    //include("vista_equipo.php");

    $equipo = crearEquipo($cantidadJugadores);
    //mostrarInformacionEquipo($equipo);
    include "vista_equipo_html.php";

} else {
    echo "Recuerte de que debe suministrar la cantidad de jugadores y debe ser mayor a 0";
}
