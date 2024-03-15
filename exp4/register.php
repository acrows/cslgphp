<html>
<head lang="en">
    <meta http-equiv=Content-Type content="text/html; charset=gb2312">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 11">

    <style>
        <!--
        table {
            mso-displayed-decimal-separator: "\.";
            mso-displayed-thousand-separator: "\,";
        }

        @page {
            margin: 1.0in .75in 1.0in .75in;
            mso-header-margin: .5in;
            mso-footer-margin: .5in;
        }

        tr {
            mso-height-source: auto;
            mso-ruby-visibility: none;
        }

        col {
            mso-width-source: auto;
            mso-ruby-visibility: none;
        }

        br {
            mso-data-placement: same-cell;
        }

        .style0 {
            mso-number-format: General;
            vertical-align: middle;
            white-space: nowrap;
            mso-rotate: 0;
            mso-background-source: auto;
            mso-pattern: auto;
            color: windowtext;
            font-size: 12.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: 宋体;
            mso-generic-font-family: auto;
            mso-font-charset: 134;
            border: none;
            mso-protection: locked visible;
            mso-style-name: 常规;
            mso-style-id: 0;
        }

        td {
            mso-style-parent: style0;
            padding-top: 1px;
            padding-right: 1px;
            padding-left: 1px;
            mso-ignore: padding;
            color: windowtext;
            font-size: 12.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: 宋体;
            mso-generic-font-family: auto;
            mso-font-charset: 134;
            mso-number-format: General;
            vertical-align: middle;
            border: none;
            mso-background-source: auto;
            mso-pattern: auto;
            mso-protection: locked visible;
            white-space: nowrap;
            mso-rotate: 0;
        }

        .xl24 {
            mso-style-parent: style0;
            font-size: 11.0pt;
            border: .5pt solid windowtext;
        }

        .xl25 {
            mso-style-parent: style0;
            color: blue;
            font-size: 11.0pt;
            font-weight: 700;
            text-align: right;
            border: .5pt solid windowtext;
            background: #CCFFFF;
            mso-pattern: auto none;
        }

        .xl26 {
            mso-style-parent: style0;
            font-size: 12.0pt;
            text-align: center;
            border: .5pt solid windowtext;
            background: #99CCFF;
            mso-pattern: auto none;
        }

        .xl27 {
            mso-style-parent: style0;
            font-size: 11.0pt;
            text-align: center;
            border: .5pt solid windowtext;
            background: #99CCFF;
            mso-pattern: auto none;
        }

        .xl27x {
            mso-style-parent: style0;
            font-size: 9.0pt;
            text-align: left;
            border: .5pt solid windowtext;
            background: #FFFF99;
            overflow: auto;
            white-space: pre-wrap;
            mso-pattern: auto none;
        }

        rt {
            color: windowtext;
            font-size: 9.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: 宋体;
            mso-generic-font-family: auto;
            mso-font-charset: 134;
            mso-char-type: none;
            display: none;
        }

        -->
    </style>
</head>

<body link=blue vlink=purple>
<form name="htest" action="#" method="post">
    <table align="center" border=0 cellpadding=0 cellspacing=0 width=287 style='border-collapse:
 collapse;table-layout:fixed;width:250pt'>
        <col width=115 style='mso-width-source:userset;mso-width-alt:3680;width:86pt'>
        <col width=172 style='mso-width-source:userset;mso-width-alt:5504;width:129pt'>
        <tr height=60 style='mso-height-source:userset;height:45.0pt'>
            <td colspan=2 height=60 class=xl26 width=287 style='height:45.0pt;width:215pt'>
                用户注册管理
            </td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl25 style='height:30.0pt;border-top:none'>★学号</td>
            <td class=xl24 style='border-top:none;border-left:none'><input type="text" size=22 name="xh" value=""></td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl25 style='height:30.0pt;border-top:none'>姓名</td>
            <td class=xl24 style='border-top:none;border-left:none'><input type="text" size=22 name="xm" value=""></td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl25 style='height:30.0pt;border-top:none'>性别</td>
            <td class=xl24 style='border-top:none;border-left:none'>
                <select style="width:166px" size='1' name='xb'">
                <option value='男'>男</option>
                <option value='女'>女</option>
                </select>
            </td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl25 style='height:30.0pt;border-top:none'>密码A</td>
            <td class=xl24 style='border-top:none;border-left:none'><input type="password" size=23 name="pasa" value="">
            </td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td height=40 class=xl25 style='height:30.0pt;border-top:none'>密码B</td>
            <td class=xl24 style='border-top:none;border-left:none'><input type="password" size=23 name="pasb" value="">
            </td>
        </tr>
        <tr height=60 style='mso-height-source:userset;height:45.0pt'>
            <td colspan=2 height=60 class=xl27x style='height:45.0pt'>
                信息提示：“注册”时密码A与密码B相同；“修改”时密码A是旧密码，密码B是新密码，“学号”不能修改！
            </td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td colspan=2 height=40 class=xl27 style='height:30.0pt'><input type="submit" value="注册"
                                                                            name="hxy">　<input type="submit"
                                                                                               value="修改" name="hxy">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if (isset($_POST['hxy'])) {
    $xh = $_POST['xh'];
    $xm = $_POST['xm'];
    $xb = $_POST['xb'];
    $pasa = $_POST['pasa'];
    $pasb = $_POST['pasb'];
    $hxy = $_POST['hxy'];
    if ($pasa !== $pasb) {
        die('<script>alert("两次密码不一致")</script>');
    } else {
        $mm = $pasa;
        $link = mysqli_connect('localhost:3306', 'cslgphp', '123456', 'studentgrade'); //创建数据库连接
        if (!$link) { //如果失败
            die('连接mysql数据库失败' . mysqli_error()); //显示出错误信息
        }
        if ($hxy === "注册") {
            $sql = "insert into `user` values('$xh','$xm','$xb','$mm');";
            if (mysqli_query($link, $sql)) {
                echo '<script>alert("注册成功")</script>';
                echo '<script>window.location.href = "login.php";</script>';
            } else {
                die('注册失败' . mysqli_error()); //显示出错误信息
            }
        } elseif ($hxy === "修改") {
            $sql = "update user set xm=$xm,xb=$xb,mm=$mm where xh=$xh);";
            if (mysqli_query($link, $sql)) {
                echo '<script>alert("修改成功")</script>';
                echo '<script>window.location.href = "login.php";</script>';
            } else {
                die('修改失败' . mysqli_error()); //显示出错误信息
            }
        }
        mysqli_close($link); //最后关闭数据库连接
    }
}
?>
