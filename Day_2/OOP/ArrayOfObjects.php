<?php

    //include "Employee.php";
    include "SalesEmployee.php";

    $sa1=new SalesEmployees(101,"EShan",100000,4000);
    $sa1->showSalesEmployeesDetails();








    $s1=new SalesEmployees(101,"EShan",100000,50000);

    


    $emp1=new Employee(101,"EShan",100000);
    $emp1->showEmployeDetails();


$emp1=new Employee(101,"EShan",100000);
$emp1->showEmployeDetails();


    $empRecords=array(
        new Employee(101,"EShan",100000),
        new Employee(102,"tanish",20000),
        new Employee(103,"Suha",400000),
        new Employee(104,"Kranti",50000),
        new Employee(105,"Paresh",300000)
    );


    foreach($empRecords as $rec){
        //print_r($rec);
        $rec->showEmployeDetails();
    }

?>
