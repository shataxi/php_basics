<?php

$conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("Couldn't connect to database");
    }
    else{
        echo "Connecting to database";


        //CREATE TABLE inside any particular database

        mysqli_select_db($conn,"mydb");
        $sql="CREATE TABLE $_POST[create_table](FirstName varchar(15),LastName varchar(15), Age int);";

        //EXECUTE QUERY
        mysqli_query($conn,$sql);
        
        echo "Table is created successfully";
    }

    mysqli_close($conn);


?>