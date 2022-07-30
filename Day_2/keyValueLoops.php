<?php

$my_collections=array("1"=>"One","2"=>"Two","3"=>"Three");

echo $my_collections["1"]."\n";

foreach($my_collections as $values=>$val_values){
    echo "Key is ".$values." Value is ".$val_values."\n";
}


$keys=array_keys($my_collections);
print_r($keys);

echo "\n Another way to print key value-pairs\n";
for($i=0;$i<count($my_collections);$i++){
    echo "Key is ".$keys[$i]." Value is ".$my_collections[$keys[$i]]."\n";
}
?>