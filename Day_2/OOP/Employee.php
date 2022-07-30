<?php
class Employee
{
    private $empId ;
    private $empName;
    private $salary;


    function __construct( $empId, $empName, $salary)    {
        echo "<br>Parameterised constructor of Employee is called";
        $this->empId = $empId;
        $this->empName = $empName;
        $this->salary = $salary;
    }

  

    function calculateSalary(){
        echo "<br> calculateSalary is called";
    }

    function setSalary($newSalary){
        echo "setSalary is called";
        $this->salary = $newSalary;
    }

    function getSalary(){
        echo "getSalary is called";
        return $this->salary;
    }

    function showEmployeDetails(){
        echo "<br>Employee Deatils : ".$this->empId." Name :- ".$this->empName." Salary".$this->salary;
        
    }

    function __destruct(){
        echo "<br> Employee Destructor is called";
    }
}
?>