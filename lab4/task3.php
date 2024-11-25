<?php
    session_start();
    if(isset($_POST['submit'])){

        
        $dd=$_POST['dd'];
        $mm=$_POST['mm'];
        $yyyy=$_POST['yyyy'];
         if($dd==null || $mm==null || $yyyy==null)
        {
            echo"null value found";
        }
        else if($dd<1 || $dd>31)
        {
            echo "invalid day";
        }
        else if($mm<1 || $mm>12)
        {echo "invalid month";}
        else if($yyyy<1953 || $yyyy>1998)
        {
            echo "invalid year";
        }
        else if(!ctype_digit($dd) || !ctype_digit($mm) || !ctype_digit($yyyy))
        {
            echo "invalid input";
        }
        else if(!checkdate($mm,$dd,$yyyy))
        {
            echo "invalid date";
        }
        else 
        echo "valid date";
    }else{
        header('location: task3.html');
    }


    
?>