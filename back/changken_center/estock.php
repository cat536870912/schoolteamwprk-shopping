
<?php 
session_start();
mysql_query("set names utf8");
include("config.php"); 
include("function.php");//引入函數庫
$username= $_POST['username'];
look();
?>


