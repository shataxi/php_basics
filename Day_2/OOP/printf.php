<?php


class Message{
        function formatMessage($message){
             printf("<i>%s</i>", $message);
        }
    }


    class BoldMessage extends Message{
        function formatMessage($message){
            printf("<b>%s</b>", $message);
        }
    }



    $msg=new Message();
    $msg->formatMessage("PHP is good");

    $msg=new BoldMessage();
    $msg->formatMessage("PHP is good");


?>