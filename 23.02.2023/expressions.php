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

function doubler($i){
    return $i*2;
}

$k = doubler(8);
echo "<br>$k";
$a = 2; $b = 4;
echo "<br>";
echo "This is the value of a ".$a."\n<br>";
echo "This is the value of b ".$b."\n<br>";
echo "<br>";
for ($a = 2, $b = 4; $a < 3; $a++) //But comma operator only works in looping initiator
{
    echo "Assigning using comma in for loop<br>";
  echo $a."\n";
  echo $b."\n";
}

?>