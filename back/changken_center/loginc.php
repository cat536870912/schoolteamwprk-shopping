<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫
$username = $_POST['username'];
$password = $_POST['password'];
$password_md5 = md5($password); //密碼加密
login($username,$password,$password_md5);//使用登入函數
?>