<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $blood=$_POST['blood_group'];
        if(empty($blood))
        echo "please select an group";
        else 
        echo "blood group selected";
    }
    else{
        header('location: task6.html');
    }


    
?>