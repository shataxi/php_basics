<?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("Couldn't connect to database");
    }
   
    mysqli_select_db($conn,$_POST['dbname']);

    $result=mysqli_query($conn,"SELECT * FROM $_POST[tname]");
    // print_r($result);
    // echo "<br><br>";
    // while($row=mysqli_fetch_array($result)){
    //    echo "\n".$row['FirstName']." ".$row['LastName']." ".$row['Age']."\n";
    // }
    echo "<br><br>";
    echo "<table border='1'>
        <tr>
        <th>First Name</th><th>LastName</th><th>Age</th></tr>
        </table>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>
            <td>".$row['FirstName']."</td>
            <td>".$row['LastName']."</td>
            <td>".$row['Age']."</td>";
        echo "</tr>";
    }
    mysqli_close($conn);

?>