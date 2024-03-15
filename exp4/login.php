<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>用户登录</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="username">学号:</label>
            <input type="text" id="username" name="xh" required>
        </div>

        <div class="form-group">
            <label for="password">密码:</label>
            <input type="password" id="password" name="mm" required>
        </div>

        <div class="form-group">
            <input type="submit" value="登录" name="login">
        </div>
    </form>
</div>
</body>
</html>
<?php
include("user.php");
if (isset($_POST['login'])) {
    $xh = $_POST['xh'];
    $mm = $_POST['mm'];
    $link = mysqli_connect('localhost:3306', 'cslgphp', '123456', 'studentgrade'); //创建数据库连接
    if (!$link) { //如果失败
        die('连接mysql数据库失败' . mysqli_error()); //显示出错误信息
    }
    $sql = "select * from user where xh='$xh' and mm='$mm'";
    $result = mysqli_query($link, $sql);
    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            $u = new user($row['xh'], $row['xm'], $row['xb'], $row['mm']);
            $seruser = serialize($u);
            setcookie('user', $seruser, time() + 86400, '/'); // Cookie的有效期为一天
            echo '<script>window.location.href = "success.php";</script>';
        }
    } else {
        echo "查询失败: " . mysqli_error($link);
    }
    mysqli_close();
}
?>