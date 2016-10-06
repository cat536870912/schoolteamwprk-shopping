<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<?php session_start(); ?>
</head>

<body>
<?php 
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$name = $_POST['name'];
$content = $_POST['content'];
$contenttime = date("Y:m:d");
$reply = $_POST['reply'];
$replytime = date("Y:m:d");

$sql = "insert into board(contenttime,name,content,reply,replytime) values ('$contenttime','$name','$content','$reply','$replytime')";

if(mysql_query($sql))
{
	echo '新增成功!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=form_finish.php>';
}
else
{
	echo '新增失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=form.php>';
}
?>


</body>
</html>