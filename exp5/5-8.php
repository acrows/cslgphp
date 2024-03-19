<?php
// 获取系统当前的日期和时间
$current_date = date("Y年m月d日");

// 获取当前是星期几
$weekday = date("w");
$weekdays = array("日", "一", "二", "三", "四", "五", "六");
$current_weekday = "星期" . $weekdays[$weekday];

// 输出结果
echo $current_date . $current_weekday;
?>