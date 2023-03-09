<?php

namespace MyNamespace1;

class MyClass1 {
  public function __construct() {
    echo "Hii Sridharan I am from MyClass1 __constructor";
  }
}

namespace MyNamespace2;

class MyClass2 {
  public function __construct() {
    echo "Hii Sridharan I am from MyClass2 __constructor";
  }
}

$obj1 = new \MyNamespace1\MyClass1(); //Hii Sridharan I am from MyClass1 __constructor
echo "<br>";
$obj2 = new \MyNamespace2\MyClass2(); //Hii Sridharan I am from MyClass2 __constructor

?>
