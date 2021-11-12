<?php
class Equipo{
    private $nombreEquipo=0;
    private $posicion=0;

    function __construct($nombre, $posicion){
        $this->nombreEquipo=$nombre;
        $this->posicion=$posicion;
    }

    function mostrarEquipo(){
        echo 'El nombre es: '.$this->nombreEquipo.'<br/>';
    }
    function ponerEquipo($nombre){
        $this->nombreEquipo=$nombre;
    }

    function getNombreEquipo(){
        return $this->nombreEquipo;
    }
    function setNombreEquipo(string $nombre){
        $this->nombreEquipo = $nombre;
    }
    function getPosicion(){
        return $this->posicion;
    }
    function setPosicion($posicion){
        $this->posicion = $posicion;
    }
}
