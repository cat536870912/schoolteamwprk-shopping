<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$no = $_POST['no'];
$salary = $_POST['salary'];

$sql_update = "UPDATE `employee` SET `salary` = '$salary'  WHERE `no` = '$no'  ";
 
$result = mysql_query($sql_update) or die('MySQL update error');
header( "location:salary.php");
?>