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
    $str = "MyString";
    echo "Adding slachers to every character in a given" . '"String"';
    echo addcslashes(' foo[ ]', 'A..Z');
    ?>
    <br>
    <br>
    <?php
    echo "Length of My String " . strlen($str);
    ?>
    <br>
    <br>
    <?php
    echo "Reversing a string  " . strrev("Reversed String");
    ?>
    <br>
    <br>
    <?php
    $email = 'SRIDHARAN01234@gmail.com';
    echo "Returns all of haystack starting from and including the first occurrence of needle to the end " . stristr($email, 'i');
    ?>
    <br>
    <br>
    <?php
    $str = "Hello Sridharan";

    $arr1 = str_split($str);
    $arr2 = str_split($str, 3);

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    ?>
    <br>
    <br>
    <?php
    $str = 'apple';

    if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
        echo "Would you like a green or red apple?";
    }
    if (md5($str) === '13870be274f6c49b3e31a0c6728957f') {
        echo "This not Displayed";
    }
    ?>
    <br>
    <br>
    <?php
    echo "Array Of Elements into String";
    echo "<br>";
    $array = ['sri', 'dharan', 'sridharan01234@gmail.com'];
    var_dump(implode(",", $array));
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>
    <?php
    echo "";
    ?>
    <br>


</body>

</html>