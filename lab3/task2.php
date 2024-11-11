<?php

    function vat($ammount=0)
    {
        return $ammount*(15/100);
    }
   

    echo vat(200);
    echo "<Br>";

?>