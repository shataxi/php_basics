<?php
$i=1;
while($i<10){
    echo "\nValue is ".$i."\n";
    $i++;
}

$i=1;
do{
    echo 'Value is '.$i."\n";
    $i++;
}while($i<10);


//switch case along with do-while

do{

    echo "1] Smile\n2] Expression\n3] Sadness\n4] Joy\nEnter your choice\n";
    $choice=(int)readline("Enter your choice");
    switch($choice){
        case 1:
            echo "Smile please";
            break;
        default: 
            echo "Invalid choice";

    }

    echo "Do you want to continue?";
    $input=fgetc(STDIN);
    echo $input;
}while($input=='y' || $input=='Y');
?>