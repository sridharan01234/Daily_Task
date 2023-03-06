<?php
setcookie('name','SRIDHARAN',time()+(36000));
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
    <h1>Cookies Using PHP</h1>
    <p>Here is your name stored as cookie <?=htmlspecialchars($_COOKIE['name']) ?></p>
</body>
</html>