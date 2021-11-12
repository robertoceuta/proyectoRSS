<?php
include_once ('Equipo.php');
$arrayJugadores = [];
for ($i = 0; $i<9; $i++){
    $jugador = new Jugador($i);
    $jugador->addPtos(rand(20,100));
    array_push($arrayJugadores,$jugador);
}
$equipo = new Equipo($arrayJugadores);
echo 'La suma total de puntos es '.$equipo->getTotal();
