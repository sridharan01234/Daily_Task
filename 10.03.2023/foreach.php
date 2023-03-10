<?php
$arr = array("Sri", "dha", "ra", "n");
foreach ($arr as $value) {
    echo $value . " "; //1 2 3 4
}

echo "<br>";

$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $value) {
    foreach ($value as $v2) {
        echo $v2 . " ";
    }
    echo "<br>";
}
unset($value);
?>