<?php

class A{
        function show(){
            echo "<br>show method from A class ";
        }
    }

    class B extends A{
        function show(){
            echo "<br>show method from B class ";
        }

    }

    class C extends B{
        function show(){
            echo "<br>show method from C class ";
        }

        function call(){
            $this->show(); ///current class
            parent::show(); //base class show method 
            A::show(); //grand Parent show method

        }
    }


    $cObj=new C();
    $cObj->call();



?>