<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫
$no = $_POST['no'];
ldelete($no);//使用刪除函數
?>