<?php
class Person {
    public $name = 'Sridharan';
    private $age = "20";

    function get() {
        echo "This is ur name $this->name and your age is $this->age";
    }
}
class Student extends Person {
    function std() {
        echo "This is ur name $this->name from another class ";
    }
}
$obj = new Person();
echo $obj->get(); //This is ur name Sridharan from another class
echo "<br>";
$obj = new Student(); //This is ur name Sridharan and your age is 20
echo $obj->std();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>