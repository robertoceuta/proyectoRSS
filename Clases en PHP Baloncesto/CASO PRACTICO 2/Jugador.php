<?php
class Jugador {
    private $numeroJug = 0;
    private $ptos = 0;

    function __construct(int $numeroJugador){
        $this->numeroJug = $numeroJugador;
    }

    function getNumJug(){
        return $this->numeroJug;
    }
    function getPtos(){
        return $this->ptos;
    }
    function addPtos(int $ptos){
        $this->ptos += $ptos;
    }
}
