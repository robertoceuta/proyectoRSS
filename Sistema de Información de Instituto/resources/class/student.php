<?php
include_once('../controllers/connectdb.php');
class Student {
    private $pk=0;
    private $registration=0;
    private $name=0;
    private $lastname1=0;
    private $lastname2=0;
    private $classroomK=0;

    function __construct($pk, $resg, $name, $last1, $last2, $classroomK){
        $this->pk=$pk;
        $this->registration=$resg;
        $this->name=$name;
        $this->lastname1=$last1;
        $this->lastname2=$last2;
        $this->classroomK=$classroomK;
    }

}