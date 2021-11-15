<?php
include_once "resources/class/teacher.php";
include_once "resources/controllers/connectdb.php";

$teacher1= new Teacher();

var_dump($teacher1);
echo $teacher1->select($bd,'select * from teacher');
?>
