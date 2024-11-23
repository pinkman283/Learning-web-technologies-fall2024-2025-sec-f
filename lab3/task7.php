<?php
for($i=1;$i<4;$i++)
{
    for($j=1;$j<$i+1;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
for($i=3;$i>0;$i--)
{
    for($j=1;$j<$i+1;$j++)
    {
        echo "$j ";
    }
    echo "<br>";
}
echo "<br>";
$asci=65;
for($i=1;$i<4;$i++)
{
    for($j=1;$j<$i+1;$j++)
    {
        echo chr($asci);echo " ";
        $asci++;
    }
    echo "<br>";
}
 

?>