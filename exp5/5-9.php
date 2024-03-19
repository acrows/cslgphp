<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operate</title>
</head>
<body>
<form action="#" method="get">
    num1:<input type="text" name="num1"><br>
    num2:<input type="text" name="num2"><br>
    operation:<input type="text" name="operation"><br>
    <input type="submit">
</form>
</body>
</html>

<?php
function compare_numbers($num1, $num2, $operation)
{
    if ($num1 == $num2) {
        echo $num1;
    } elseif ($operation == "B") {
        echo max($num1, $num2);
    } elseif ($operation == "L") {
        echo min($num1, $num2);
    } else {
        echo "Invalid operation";
    }
}

if ($_GET['num1'] && $_GET['num2'] && $_GET['operation'] !== null) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
    compare_numbers($num1, $num2, $operation);
}
