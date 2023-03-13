<?php
//require 'NamespaceUtils.php';
use MyApp\Utils\Logger;
use function MyApp\Utils\format_string;

// use the Logger class
$logger = new Logger();
$logger->log('Hello, world!');

// use the format_string function
$str = '  hello, world!  ';
echo format_string($str);
?>