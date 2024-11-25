<?php
    session_start();
    if(isset($_POST['submit']))
    {
        if(!isset($_POST['GENDER']))
        {
            echo " please select an option!";
        }
        else 
        echo "option selected";
    }
    else{
        header('location: task4.html');
    }


    
?>