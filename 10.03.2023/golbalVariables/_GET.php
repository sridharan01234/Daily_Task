<?php
$name = $_GET['name'];
$age = $_GET['age'];

echo "Your name is: " . $name . "<br>";
echo "Your age is: " . $age;
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
<form action="process.php" method="get">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br>

  <label for="age">Age:</label>
  <input type="number" id="age" name="age"><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>