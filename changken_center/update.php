<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>更新帳號資訊</title>
</head>

<body>
<h1 style="text-align: center;">更新帳號資訊</h1>
<div style="text-align: center;">
<?php
session_start();
include("config.php"); 
$username = $_SESSION['username'];
$sql = "SELECT * FROM user where username='$username'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
if($_SESSION['level']!=null)
{
?>
<form method="post" action="updatec.php" name="reg">
<table style="text-align: center; width: 100px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;">
使用者:<input name="username" type="text" readonly="readonly" value="<?php echo $row[1];?>"><br>
email:<input name="email" type="text" value="<?php echo $row[2];?>"><br>
密碼:<input name="password" type="password"><br>
<input name="level" type="hidden" value="<?php echo $row[4];?>"><br>
<input name="reg" value="更新" type="submit"><br>
</td>
</tr>
</tbody>
</table>
</form>
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