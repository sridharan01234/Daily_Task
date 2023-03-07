<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    echo "<br>";
} finally {
    echo "First finally.\n";
    echo "<br>";
}

try {
    echo inverse(0) . "\n";
    echo "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    echo "<br>";
} finally {
    echo "Second finally.\n";
    echo "<br>";
}


echo "Hello World\n";
echo "<br>";
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