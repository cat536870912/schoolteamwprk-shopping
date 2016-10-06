<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");

$product = $_POST['product'];
$quantity = $_POST['quantity'];

$sql="INSERT into purchase (`p_name`, `pur_quantity`) VALUES ('$product', '$quantity')";

$result = mysql_query($sql) or die(mysql_error());
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>進貨小單</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>產品：</td>
		<td><?php echo $_POST["product"]; ?></td>
	</tr>
	<tr>
		<td>數量：</td>
		<td><?php echo $_POST["quantity"]; ?></td>
	</tr>
	<tr align="center">
		<td colspan="2">
			<a href="purchase.php">繼續進貨</a>
            <a href="purchase_record.php">查看記錄</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>