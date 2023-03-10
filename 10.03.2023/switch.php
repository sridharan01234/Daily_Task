<?php
// This switch statement:
$i = 2;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case (1||2):
        echo "i equals 1";
        break;
}
