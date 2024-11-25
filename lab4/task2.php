<?php
    session_start();
    $pattern="/(@gmail.com)(@yahoo.com)/i";
    if(isset($_POST['submit'])){

        $email  =  trim($_REQUEST['email']);
        if(empty($email))
            echo " null value found";
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo "invalid input";
        }
        else 
        echo "valid user";
        
       
    }else{
        header('location: task1.html');
    }


    
?>