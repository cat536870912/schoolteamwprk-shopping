<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");
$data = mysql_query("select * from purchase");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>進貨記錄</title>
</head>

<body>
<table width="700" border="1">
	<tr>
		<td>品名</td>
		<td>數量</td>
  	</tr>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{
	$rs=mysql_fetch_row($data);
?>
  	<tr>
    	<td><?php echo $rs[2]?></td>
    	<td><?php echo $rs[3]?></td>
  	</tr>
<?php
}
?>
	<tr align="center">
		<td colspan="2">
			<a href="purchase.php">進貨產品</a>
		</td>
	</tr>
</table>
</body>
</html>