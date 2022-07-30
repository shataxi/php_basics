<?php

class Emp{
    var $empID;
    var $name;
    var $age;

    function setName($name){
        $this->name=$name;
    }

    function getName(){
        return $this->name;
    }
}
$emp1 = new Emp();
$emp1->setName("Siya");
echo $emp1->getName();

?>