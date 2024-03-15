
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>计算器</title>
</head>
<body>
<h3>实现一个计算器</h3>
<form action="#" method="post">
    第一个数：<input type="text" name="first_num">
    <br>
    <input type="radio" name="operator" value="add">+
    <input type="radio" name="operator" value="subtract">-
    <input type="radio" name="operator" value="multiply">*
    <input type="radio" name="operator" value="divide">/
    <br>
    第二个数：<input type="text" name="second_num">
    <br>
    <input type="submit">
</form>
</body>
</html>
<?php
$first_num = $_POST['first_num'];
$operator = $_POST['operator'];
$second_num = $_POST['second_num'];
switch ($operator) {
    case "add":
        echo "$first_num+$second_num=";
        echo $first_num + $second_num . "<br>";
        break;
    case "subtract":
        echo "$first_num-$second_num=";
        echo $first_num - $second_num . "<br>";
        break;
    case "multiply":
        echo "$first_num*$second_num=";
        echo $first_num * $second_num . "<br>";
        break;
    case "divide":
        echo "$first_num/$second_num=";
        echo $first_num / $second_num . "<br>";
        break;
}
?>