<?php
    // echo phpinfo();
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("Couldn't connect to database");
    }
    else{
        echo "Connecting to database";
        if(mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS mydb")){
            echo "Database created successfully";
        }else{
            echo "Database not created successfully";
        }


        //CREATE TABLE inside any particular database

        mysqli_select_db($conn,"mydb");
        $sql="CREATE TABLE Persons(FirstName varchar(15),LastName varchar(15), Age int);";

        //EXECUTE QUERY
        mysqli_query($conn,$sql);
        
        echo "Table is created successfully";
    }

    mysqli_close($conn);
?>