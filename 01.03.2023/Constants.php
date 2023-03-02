<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

define('MY_URL','https://www.url.com');
print MY_URL;

define("Const","A Constant");
print constant("Const");
define("Const99","An another Constant");
print constant("Const99");
define("Const_cons","Also a Constant");
print constant("Const_cons");

//Invalid 
define("99InvalCons",    "I am not Displayed");
print constant("InvalCons");

define("__const__", "Correct but should be avoided"); 
print constant("___const__");

?>
</body>
</html>