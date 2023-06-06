<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For loop</title>
</head>
<body>
  <form action="inputForloop.php" method="post">
    <label>Enter a Number to to see 1 to that number</label>
    <input type="text" name="counter">
    <input type="submit" value="start">
  </form>
</body>
</html>


<?php

$counter = $_POST["counter"];

for ($i = 1; $i <= $counter; $i++){
  echo $i . "</br>";
}

?>