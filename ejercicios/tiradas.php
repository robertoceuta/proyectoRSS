<?php
include_once ('Dado.php');
$dado = new Dado();
var_dump($dado);
for($i = 0; $i<12;$i++){
    echo($dado->tirarDado().'<br/>');
}
?>
