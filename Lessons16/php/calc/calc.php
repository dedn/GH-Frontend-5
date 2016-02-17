<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
<form method="get" action="calc.php">

<label for="username">Чило №1<br></label><input type="text" name="count1"><br>
<label for="username">Чило №2<br></label><input type="text" name="count2"><br>
<select name="count3">
  <option>+</option>
  <option>-</option>
  <option>*</option>
  <option>/</option>
</select><br><br>
<input type="submit" value="посчитать">
</form>
</div>
<div class="result">
<h3>Результат</h3>
<?php
$count1 = $_GET['count1'];
$count2 = $_GET['count2'];
$count3 = $_GET['count3'];

echo $count1 . $count3 . $count2 . '=';

switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
  case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
   case '/':
        echo $count1 / $count2;
        break;
}
?>
</div>
</body>
</html>