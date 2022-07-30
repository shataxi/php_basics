<?php
       require __DIR__ . './Header.php';

       echo "Main part of index.php";


    $request_method=strtoupper($_SERVER['REQUEST_METHOD']);
    echo $request_method;

    if($request_method=='GET'){
        require __DIR__ . './get.php';
    }
    else{
        require __DIR__ . './post.php';
    }

       require __DIR__ . './Footer.php';
?>