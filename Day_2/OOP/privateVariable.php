<?php


class Employee{
    private $empId;
    private $name;
    private $age;

    function __construct($empId,$name,$age){
        echo "Constructor is called\n";
        $this->empId=$empId;
        $this->name=$name;
        $this->age=$age;
        
    }

    function showDetails(){
        echo "$this->empId"." Name ".$this->name." Age ".$this->age;
    }
    

}

$emp1= new Employee(1,"Siya",21);
echo $emp1->showDetails();


?>