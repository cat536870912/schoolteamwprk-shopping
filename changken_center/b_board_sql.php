<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$no = $_POST['no'];
$reply = $_POST['reply'];

$sql_update = "UPDATE `board` SET `reply` = '$reply'  WHERE `no` = '$no'  ";
 
$result = mysql_query($sql_update) or die('MySQL update error');
header( "location:b_board.php");
?>