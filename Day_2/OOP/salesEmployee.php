<?php
include 'Employee.php';

class SalesEmployees extends Employee{
    private $sales;
    private $commissions;
    private $netSalary;

    function __construct($empId,$empName,$age,$sales){
        parent::__construct($empId,$empName,$age);  //calling base class Employee constructor    
        echo "<br>Parameterised constructor of SalesEmployees is called";
 
        $this->age = $age;
        $this->commissions = 0;
        $this->netSalary = 0;
    }


    public function showSalesEmployeesDetails(){
        echo "<br>Sales Employee ".$this->age." ".$this->commissions." ".$this->netSalary;
        parent::showEmployeDetails();

    }


    public function __destruct(){
        echo "<br>Sales Employee __destruct is called";
    }


}


?>