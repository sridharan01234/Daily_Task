<?php
class phpClass {
    const CONST_VALUE = 'Hii I am from PhpClass';
}

$checker = 'phpClass';
echo $checker::CONST_VALUE;
echo "<br>";
echo phpClass::CONST_VALUE;
?>