<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫
$id = $_POST['id'];
delete($id);//使用刪除函數
?>