<?php 
session_start();
include("config.php"); 
include("function.php");//引入函數庫
$NO = $_POST['NO'];
edelete($NO);//使用刪除函數
?>