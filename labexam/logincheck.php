<?php
    session_start();
    if(isset($_POST['registration']))
    {
        header('location: registration.html');
    }
    else if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);

        if($username == null || empty($password) ){
            echo "Null data found!";
        }else if ($username == $password){
            
            $_SESSION['flag'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            echo "Invalid user";
        }
    }else{
        
        header('location: login.html');
    }

?>