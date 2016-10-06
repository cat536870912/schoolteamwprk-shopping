<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>會員管理中心</title>
</head>

<body>
<h1 style="text-align: center;">會員管理中心</h1>
<div style="text-align: center;">
<?php 
session_start();
if($_SESSION['level']!=null)
{
?>
<p><a href="reg.php">新增會員</a>     <a href="update.php">更新帳號資訊</a>     <a href="delete.php">刪除會員</a>     <a href="logout.php">登出</a></p>
<p>歡迎使用會員中心！！！</p>
<?php
}
else
{
?>
<font color="red">您尚未登入！</font>
<?php
}
?>
</div>
</body>

</html>