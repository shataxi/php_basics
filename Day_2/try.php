<?php

// $my_collections=array("Jan"=>31,"Feb"=>28,"Mar"=>31,"Apr"=>30,"May"=>31,"June"=>30,"Jul"=>31,"Aug"=>31,"Sep"=>30);

// foreach($my_collections as $month=>$days){
//     echo "Month is ".$month." No of Days ".$days."\n";
// }

//sorting array in ascending order.
$numbers=array(10,23,12,43,52,11,17);

function sort_array(&$arr){
         array_multisort($arr);
         
}
sort_array($numbers);
print_r($numbers);

?>