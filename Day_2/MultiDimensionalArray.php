<?php

$employee_records=array(
           array("empId"=>"101","name"=>"Siya","salary"=>"10000"),
           array("empId"=>"101","name"=>"Siya","salary"=>"10000"),
           array("empId"=>"101","name"=>"Siya","salary"=>"10000"),
           array("empId"=>"101","name"=>"Siya","salary"=>"10000"),
           array("empId"=>"101","name"=>"Siya","salary"=>"10000"),
);

print_r($employee_records[0]["name"]);

$keys=array_keys($employee_records);
print_r($keys);
for($i=0;$i<count($employee_records);$i++){
    echo $keys[$i]."\n";
    foreach($employee_records[$keys[$i]] as $key=>$value){
        echo $key." = ".$value." ";

    }
    echo "\n";
}


?>