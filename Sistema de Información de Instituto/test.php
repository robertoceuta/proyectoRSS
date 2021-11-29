<?php
require_once "./resources/class/teacher.php";
$teacher1= new Teacher();

var_dump($teacher1);
echo $teacher1->select($bd,'select * from teacher');
?>
