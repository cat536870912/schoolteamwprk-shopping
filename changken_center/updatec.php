<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];//會員等級不可更改

$sql = "SELECT * FROM user where username='$username'";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

if($password==null)
{
$password_md5 = $row[3];
}
else
{
$password_md5 = md5($password);
}
update($username,$email,$password_md5,$level);//使用更新帳號資訊函數
?>