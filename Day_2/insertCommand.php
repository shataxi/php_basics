<?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("Couldn't connect to database");
    }
    
    mysqli_select_db($conn,"mydb");
    $sql="INSERT INTO persons(FirstName,LastName,age) values('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    echo $sql;

    if(!mysqli_query($conn,$sql)){
        die("Couldn't insert values into persons");
    }
    else{
        echo "1 record inserted into persons";
    }

    mysqli_close($conn);
?>