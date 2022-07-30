<?php

$v=(int)readline('Enter a number');
echo("\nEven Numbers\n");
for($i=1;$i<$v;$i++){
    if($i%2==0)
      echo($i.' ');
}
echo("\n Odd Numbers\n");
for($i=1;$i<$v;$i++){
    if($i%2!=0)
      echo($i.' ');
}
?>