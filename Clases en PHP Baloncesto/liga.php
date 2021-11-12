<?php
include('equipo.php');

$equipo = new Equipo();
    $equipo->ponerEquipo("VLCBasket");
    $equipo->mostrarEquipo();
$equipo2 = new Equipo();
    $equipo2->ponerEquipo("RMDBasket");
    $equipo2->mostrarEquipo();



