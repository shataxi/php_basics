<?php

$values=array("C++","Java","Python","PHP","Perl","C");
//First way
print_r($values);

//second way
foreach($values as $val){
    echo $val."\n";
}

//third way

for($n=0;$n<count($values);$n++){
    echo $values[$n]." ";
}

?>