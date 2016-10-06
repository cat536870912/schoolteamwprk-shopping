<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$no = $_POST['no'];

$sql_delete = "DELETE FROM board WHERE `no` = '$no'  ";
 
$result = mysql_query($sql_delete) or die('MySQL update error');
header( "location:b_board.php");
?>



