<?php
$d=date('D');
echo $d;


if($d=='Fri')
   echo "\nLast working day of week";
else
   echo "\nWorking Days";


$v1=(int)readline("Enter first number");
$v2=(int)readline("Enter first number");
$v3=(int)readline("Enter first number");

if($v1>$v2 && $v1>$v3)
   echo "$v1 is greater";
else if($v2>$v1 && $v2>$v3)
   echo "$v2 is greater";
else
   echo "$v3 is greater";


?>