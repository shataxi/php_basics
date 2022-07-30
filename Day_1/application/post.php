<?php

if(isset($_POST['name'],$_POST['email'])){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);

    echo "Thank you user $name";
    echo "Your email id is  $email";
}
else{
    echo "You need to provide details";
}

?>