<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>進貨</title>
</head>

<body>
<form action="purchase_memo.php" method="post">
<table>
	<tr align="right">
		<td colspan="2">
			<a href="purchase_record.php">查看記錄</a>
		</td>
	</tr>
	<tr>
		<td>產品：</td>
		<td><input type="text" name="product" /></td>
	</tr>
	<tr>
		<td>數量：</td>
		<td><input type="text" name="quantity" /></td>
	</tr>
	<tr align="center">
		<td colspan="2">
			<input type="submit" value="送出">
			<input type="reset" value="重設">
		</td>
	</tr>
</table>	
</form>
</body>
</html>