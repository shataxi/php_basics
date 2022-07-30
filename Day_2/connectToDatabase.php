<?php
 $conn=mysqli_connect("localhost","root","");

if(!$conn){
    echo "Could not connect to database";
}
else {
    echo "Connecting to database";
}
mysqli_close($conn);

?>