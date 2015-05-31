<?php
session_start();
$admin = addslashes($_POST['admin']);
$password = addslashes($_POST['password']);
$admin_now = "";
$password_now = "";
if ($admin && $password ) {
	if ($admin == $admin_now && $password == $password_now) {
		$_SESSION['tongji_admin']=$admin;
		header("Location:admin.php");	
	} else {
            echo "
                <!DOCTYPE html>
                <html>
                <head>
                <meta charset='utf-8'>
                <link rel='shortcut icon' type='image/png' href='http://www.hongbaosuoping.com/img/icon.png'>
                <title>红包锁屏·数据统计</title>
                </head>
                <script language='javascript'>alert('账号密码错误……请重新输入');history.back();</script>
                <body>
                </body>
                </html>";
	}
    } else {
            echo "
                <!DOCTYPE html>
                <html>
                <head>
                <meta charset='utf-8'>
                <link rel='shortcut icon' type='image/png' href='http://www.hongbaosuoping.com/img/icon.png'>
                <title>红包锁屏·数据统计</title>
                </head>
                <script language='javascript'>alert('请输入完整……点击返回');history.back();</script>
                <body>
                </body>
                </html>";
    }
?>
