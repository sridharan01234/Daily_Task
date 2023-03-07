
<?php
$my_file = @file ('non_existent_file') or
    die ("Failed opening file: error was '" . error_get_last()['message'] . "'");
echo "<br>";
$value = @$cache[$key]; // Wont Display

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