<?php
/**
 * 计算页面脚本运行时间的自定义函数
 */
function calculateScriptRuntime() {
    $start_time = microtime(true); // 记录脚本开始时间

    // 在这里放置你要执行的代码
    // ...
    // 执行完毕

    $end_time = microtime(true); // 记录脚本结束时间
    $runtime = $end_time - $start_time; // 计算运行时间

    return $runtime;
}

// 调用自定义函数并输出结果
$runtime = calculateScriptRuntime();
echo "Script runtime: " . $runtime . " seconds";
?>