<?php

function sayHello(){
  echo "SyHello Method";
}
sayHello();

function sum($val1,$val2){
    echo "\n\n sum is ".($val1+$val2);
}

sum(10,20);

function add($val1,$val2){
   return ($val1+$val2);
}
echo "\nThe sum of values is ".add(10,20);


//call by reference

function changeValue(&$str){
    $str='new value';
}
$str1='a string';
echo "\nbefore calling function string is ".$str1;
changeValue($str1);
echo "\nafter calling function string is ".$str1;



?>