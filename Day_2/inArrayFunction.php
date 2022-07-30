<?php

$products=array("pen","pencil","eraser");

$val=readline("enter any product");
if(in_array($val,$products)){
    echo "Value is present in array";
}
else{
    echo "Value is not present";
}

array_push($products,"notebook","sharpner");
print_r($products);

echo array_shift($products); //prints the element("pen") which is removed or shifted
print_r($products);


array_unshift($products,"Ruler");
print_r($products);

$reversed_array=array_reverse($products);
print_r($reversed_array);
?>