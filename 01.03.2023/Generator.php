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
    function arrgenerator($arr){
        foreach ($arr as $key=>$val){
           yield $key=>$val;
        }
     }
     $arr=array("one"=>1, "two"=>2, "three"=>3, "four"=>4);
     $gen=arrgenerator($arr);
     foreach ($gen as $key=>$val)
     echo $key . "=>" . $val . "
     ";
    ?>
</body>

</html>