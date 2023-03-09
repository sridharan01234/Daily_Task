<?php
require 'hello.php'; // this will be displayed when files is in directory
echo "<br>";

/*
Error Message when it is not present

 in the directory

 Warning: require(C:\Users\sridharan\Documents\Daily_task\Daily_task\08.03.2023\hello.php): Failed to open stream: No such file or directory in C:\Users\sridharan\Documents\Daily_task\Daily_task\08.03.2023\RequieFiles.php on line 2
Fatal error: Uncaught Error: Failed opening required 'hello.php' (include_path='.;C:\php\pear') in C:\Users\sridharan\Documents\Daily_task\Daily_task\08.03.2023\RequieFiles.php:2 Stack trace: #0 {main} thrown in C:\Users\sridharan\Documents\Daily_task\Daily_task\08.03.2023\RequieFiles.php on line 2
*/
echo 'Hello Word';
?>