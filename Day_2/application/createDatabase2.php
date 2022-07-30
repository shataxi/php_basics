<?php

$conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("Couldn't connect to database");
    }
    else{
        echo "Connecting to database";
        if(mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS $_POST[create_database]")){
            echo "Database created successfully";
        }else{
            echo "Database not created successfully";
        }


        
    }

     
   

    mysqli_close($conn);



?>