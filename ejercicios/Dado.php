<?php
class Dado{
    private $minNumDado =  1;
    private $maxNumDado =  12;

    function tirarDado() {
        return rand($this->minNumDado,$this->maxNumDado);
    }

}
?>