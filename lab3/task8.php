<?php
$newarray= array(
    array(1,2,3,"A"),
    array(1,2,"B","C"),
    array(1,"D","E","F")
);

for($i=0;$i<sizeof($newarray);$i++)
{
    for($j=0;$j<sizeof($newarray[$i]);$j++)
    {
        if(!ctype_alpha($newarray[$i][$j]))
        echo $newarray[$i][$j] ; echo " ";
    }
    echo "<br>";
}
echo "<br>";
for($i=0;$i<sizeof($newarray);$i++)
{
    for($j=0;$j<sizeof($newarray[$i]);$j++)
    {
        if(ctype_alpha($newarray[$i][$j]))
        echo $newarray[$i][$j] ; echo " ";
    }
    echo "<br>";
}

?>