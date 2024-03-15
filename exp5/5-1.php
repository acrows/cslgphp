<?php
// 获取当前日期
$year = date('Y');
$month = date('n');
$day = date('j');

// 判断今天是本月的上、中、下旬
if ($day <= 10) {
    $period = "上旬";
} elseif ($day <= 20) {
    $period = "中旬";
} else {
    $period = "下旬";
}

// 输出结果
echo "今天是" . $year . "年" . $month . "月" . $day . "日" . $period;
?>