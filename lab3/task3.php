<?php

    function vat($ammount=0)
    {
        if($ammount%2==0)
        {
            echo "even<br>";
        }
        else{
            echo "odd<br>";
        }
    }
   

    echo vat(2025);
    

?>