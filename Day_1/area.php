<?php
$str=readline('enter shape ');

function circle($v){
    return 3.14*$v*$v;
}
function rectangle($v1,$v2){
    return $v1*$v2;
}

switch($str){

    case 'circle':
    case 'Circle': 
        $v=(int)readline("enter radius\n");
        echo "Area ".circle($v);
        break;
    case 'rectangle':
    case 'Rectangle':
        $v1=(int)readline("enter length\n");
        $v2=(int)readline("enter breadth\n");
        echo "Area ".rectangle($v1,$v2);
        break;
    default:
        echo "Shape not available in options";
}


?>