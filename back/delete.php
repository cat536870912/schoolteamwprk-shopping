<?php 
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$no=$_REQUEST['no'];
$sql="delete from board where 'no' = '$no'";
header("location:b_board.php");
echo "<script>alert('刪除成功！');</script>"; 
?>