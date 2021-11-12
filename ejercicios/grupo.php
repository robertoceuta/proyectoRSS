<?php
include_once ('Alumno.php');

$alumnoUno = new Alumno('Roberto', '30', '2º DAW');
$alumnoDos = new Alumno('Soufyane', '28', '4º de Ingeniería Informática');


$alumnoUno->mostrarNombre();
$alumnoDos->mostrarNombre();

$alumnoUno->cambiarNombre('Roberto Carlos');
$alumnoDos->cambiarNombre('Soufyane Chelli');

$alumnoUno->mostrarNombre();
$alumnoDos->mostrarNombre();

echo($alumnoUno->getNombre().'<br/>');
echo($alumnoUno->getCurso().'<br/>');
echo($alumnoUno->getEdad().'<br/>');

$alumnoUno->setNombre('NOMBRE prueba del set');
$alumnoUno->setCurso('CURSO prueba del set');
$alumnoUno->setEdad('EDAD prueba del set');

echo($alumnoUno->getNombre().'<br/>');
echo($alumnoUno->getCurso().'<br/>');
echo($alumnoUno->getEdad().'<br/>');

