<?php
$val1=(int)readline("Enter an integer value");
$val2=(int)($val1/10);

$v1=($val1%10);
$v2=((int)($val1/10)%10);
$v3=((int)($val2/10)%10);
echo "\n In reverse order = $v1$v2$v3";

?>