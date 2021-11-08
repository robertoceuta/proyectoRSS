<?php
require('database.php');
$query= "select * from classroom";
$bd = new Database("localhost", "root", "", "sicole");
$bd->connectSelect($query);
var_dump($bd->connectSelect($query)['course']);


