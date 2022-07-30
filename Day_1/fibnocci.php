<?php

$n=(int)readline("Enter a number greater than 2 ");
$i=1;
$a=0;
$b=1;
echo "0 1";
while($i<=($n-2)){
    
    $c=$a+$b;
    echo " ".$c." ";
    $a=$b;
    $b=$c;
    $i++;
}


?>