<?php

    class Calculation{


        function __call($name_of_function,$arguments){

            echo $name_of_function;
            print_r($arguments);
            if($name_of_function=='add'){
                // echo count($arguments);
                switch(count($arguments)){
                    case 1:
                        return $arguments[0];
                        break;
                    case 2:
                        return $arguments[0]+$arguments[1];            
                        break;
                }
            }
        }
    }


    $obj1=new Calculation();

   echo $obj1->add(10,20);

  $obj1->abc(100);
  $obj1->xyz(100,200);




  $obj1->add(100,200);
