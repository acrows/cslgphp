<?php
// 获取所有已经定义的常数
$constants = get_defined_constants();

// 遍历常数列表并输出
for ($i = 0; $i < count($constants); $i++) {
    $constant_name = array_keys($constants)[$i];
    $constant_value = $constants[$constant_name];
    echo "Constant Name: $constant_name, Constant Value: $constant_value" . PHP_EOL;
}
?>