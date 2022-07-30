<?php

$products=array("pen"=>10,"pencil"=>15,"eraser"=>5);

function showValues($val,$k){
    echo $k." value is ".$val."\n";
}

array_walk($products,"showValues");
?>