<?php
function foo ()
{
    return 5;
}
$a = ($b = 5);
echo "Value of a is $a and b is $b ";
$c = $d = 10;
echo "<br>Value of a is $c and b is $d ";
echo "<br>";
echo foo();  
echo "<br>Hii";
?>