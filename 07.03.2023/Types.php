<?php
$Const = false;
if($Const === False) {
    echo "Hii I am Bcoz of False"; //This will be displayed
}
echo "<br>";
// no indentation
echo <<<END
      a
     b
    c
\n
END;
echo "<br>";
// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;
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