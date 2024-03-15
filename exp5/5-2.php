<?php
$score = 85; // 替换成您的成绩

// 利用switch...case语句根据不同的成绩输出对应的等级
switch (true) {
    case ($score >= 90):
        $grade = "优秀";
        break;
    case ($score >= 80):
        $grade = "良好";
        break;
    case ($score >= 70):
        $grade = "中等";
        break;
    case ($score >= 60):
        $grade = "及格";
        break;
    default:
        $grade = "不及格";
        break;
}

// 输出等级
echo "您的成绩为：" . $score . "，评级为：" . $grade;
?>