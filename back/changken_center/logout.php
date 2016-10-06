<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>登出中...</title>
</head>

<body>
<h1 style="text-align: center;">登出中...</h1>
<div style="text-align: center;">
<?php
session_start();
include("function.php");
logout();//使用登出函數
?>
</div>
</body>

</html>