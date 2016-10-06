<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$link=mysql_connect("localhost","root","1234");
$sql=mysql_select_db("final");
mysql_query("set names utf8");
$picture = mysql_query("select p_picture from product");
$name = mysql_query("select p_name from product");
$price = mysql_query("select p_price from product");
$count = mysql_query("select p_quantity from product");
$intro = mysql_query("select p_intro from product");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>存貨</title>
</head>

<body>
<table>
	<tr> 
        <td >
         名稱：<?php echo mysql_result($name,0);?><br>
         價格：$ <?php echo mysql_result($price,0);?><br>
         剩餘數量：<?php echo mysql_result($count,0);?>個<br>
         介紹：<?php echo mysql_result($intro,0);?>
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,0);?>.jpg" height="100" width="100" ></td>
  	</tr>
    <tr><td>--------------------------------------------</td></tr>
   
</table>

</body>
</html>