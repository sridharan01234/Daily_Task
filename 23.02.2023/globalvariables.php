<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>