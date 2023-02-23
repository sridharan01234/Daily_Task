<?php

define("MAXSIZE", 100);

echo MAXSIZE;
echo "<br>";
echo constant("MAXSIZE");
echo "<br>";

interface bar
{
    const test = 'foobar!';
}

class foo
{
    const test = 'foobar!';
}

$const = 'test';

var_dump(constant('bar::' . $const));
echo "<br>";
var_dump(constant('foo::' . $const));
