<?php
$newarray= array(3,5,8,1,3,6,7,10);
function fun($a=0,$newarray)
{
    for($i=0;$i<sizeof($newarray);$i++)
    {
        if($newarray[$i]==$a)
        {
           return "element found";
        }
       
    }
    return "element not found";
}

echo fun(20,$newarray);
   
 

?>