<?php
echo php_uname();
if(substr(php_uname(),0,7)=="Windows"){
    exec("c:\WINDOWS\system32\cmd.exe");
}


echo shell_exec('dir');

exec('dir',$commands); //$commands hold the result of execution of dir command
print_r($commands);
?>