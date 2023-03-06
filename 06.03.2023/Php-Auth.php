<?php
if ($_SERVER['PHP_AUTH_USER'] !== "admin" && $_SERVER['PHP_AUTH_PW'] !== "admin") {
    header("WWW-Authenticate: Basic realm=\"enterDetails\"");
    header("HTTP\ 1.0 401 Unauthorized");
    exit;
}
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

    <h1>Am I visible Now</h1>
</body>

</html>