<?php

function print_all($arr) {
    foreach($arr as $array) {
        yeild $array;
    }
}
$arr = [1,2,3,4];
print_all($arr);
?>