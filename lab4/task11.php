<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  $_REQUEST['username'];
        $username =trim($username);
        if($username == null ){
            echo "Null data found!";
        }
        else if(strlen($username)<3)
        {
            echo "wrong input";
        }
        else if(!ctype_alpha($username))
        {
            echo "wrong input";
        }

        else{
            echo "valid input";
        }
    }else{
        //echo "Invalid request!";
        header('location: task1.html');
    }


    //print_r($_GET);
    //echo "Test";
?>