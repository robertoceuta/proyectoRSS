<?php
class Alumno {
    private $nombre = 0;
    private $edad = 0;
    private $curso = 0;

    function  __construct($nombre, $edad, $curso){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }


    public function getNombre(): string
    {
        return $this->nombre;

    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getEdad(): string
    {
        return $this->edad;

    }

    public function setEdad(string $edad): void
    {
        $this->edad = $edad;
    }

    public function getCurso(): string
    {
        return $this->curso;

    }


    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    function mostrarNombre(){
        echo $this->nombre.'<br/>';
    }
    function cambiarNombre($nombre){
        $this->nombre = $nombre;
    }
}
?>