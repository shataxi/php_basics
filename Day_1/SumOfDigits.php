<?php
$val1=(int)readline("Enter an integer value");
$val2=(int)($val1/10);
echo "\n".($val1%10)."+".(((int)($val1/10)%10)*10)."+".(((int)($val2/10)%10)*100)."=".(($val1%10)+(((int)($val1/10)%10)*10)+(((int)($val2/10)%10)*100));
echo "\n".($val1%10)."+".((int)($val1/10)%10)."+".((int)($val2/10)%10)."=".(($val1%10)+((int)($val1/10)%10)+((int)($val2/10)%10));

?>