<?php
echo "Enter two numbers";
fscanf(STDIN,"%d %d",$val1,$val2);
echo "\nSum of".$val1." And ".$val2." is ".($val1+$val2);

//Third way to accept value
echo "\nEnter two more numbers\n";
list($val1,$val2)=explode(' ',readline());
$val1=(int)$val1;
$val2=(int)$val2;

echo "\nSum of".$val1." And ".$val2." is ".($val1+$val2);	
?>