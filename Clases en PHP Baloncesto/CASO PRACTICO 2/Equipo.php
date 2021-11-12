<?php
include_once ('Jugador.php');
class Equipo{
    private $jugadores =[];

    function __construct(array $jugador){
        array_push($this->jugadores,$jugador);
    }
    function addJug($jugador){
        array_push($this->jugadores,$jugador);
    }
    function getJug($num)  {
        for ($i = 0 ; $i<$this->jugadores.count();$i++){
            if($this->jugadores[$i]['$numeroJug']==$num){
                return $this->jugadores[$i]['$numeroJug'];
            }
        }
    }

    function getTotal(){
        $suma = 0;
        for ($i = 0 ; $i<count($this->jugadores[0]);$i++){
            $suma += $this->jugadores[0][$i]->getPtos();
        }
        return $suma;
    }
    function getJugadores() {
        //$this->jugadores.count();
        return $this->jugadores;
    }

}
