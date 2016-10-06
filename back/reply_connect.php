<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<?php session_start(); ?>
</head>

<body>
<?php 
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$no = $_REQUEST['no'];
$reply = $_POST['reply'];
$replytime = date("Y:m:d");

$sql = "update board set 'reply' ='3333' where 'no' = '311'";

if(mysql_query($sql))
{
	echo '新增成功!';
	echo '<meta http-equiv=REFRESH CONTENT=2;http://140.135.113.41/demo/form_finish.php>';
}
else
{
	echo '新增失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=reply.php>';
}
?>


</body>
</html>