<?php
    session_start();
    if(isset($_POST['submit']))
    {
        if (!isset($_POST['degree']) || count($_POST['degree']) < 2)        {
            echo " invalid input";
        }
        else 
        echo "option selected";
    }
    else{
        header('location: task5.html');
    }


    
?>