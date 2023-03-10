<?php

function printNumbers()
{
    $n = 1;

    label:
    echo $n . ' ';
    $n++;
    if ($n <= 10)
        goto label;
}

printNumbers();

?>