<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("final");
mysql_query("set names utf8");
$data = mysql_query("select * from product");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>存貨管理</title>

<style type="text/css">
.mid{
    vertical-align:middle;
}
.fr{
margin:0;
padding:0;
font-size:15px;
list-style:none;}
#main{
margin:0 auto;}
#ma_left{
width:100px;
height:400px;
float:left;}
#ma_right{
width:500px;
float:left;} 
</style>

</head>

<body>

<div id="HEADER"  style="background-color:#FF9; margin:0">
	<img src="images/cookie.png" class="mid">
	<font size="+5" face="微軟正黑體" color="#666666"> 吃餅-癡癡牛舌餅 後臺管理 </font>
</div>
<div id="main">
	<div id="ma_left" style="background:#FF9;">
		<font>倉儲部門</font>
			<br><a href="http://140.135.113.41/back/changken_center/purchase.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;進貨管理</a>
			<br><a href="http://140.135.113.41/back/changken_center/stock.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;庫存管理</a> <br>
		<br><font>銷售部門</font>
			<br><a href="http://140.135.113.41/back/changken_center/list.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;訂單管理</a><br>
		<br><font>人事部門</font>
			<br><a href="http://140.135.113.41/back/changken_center/estock2.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;員工管理</a><br>
		<br><font>客服部門</font>
			<br><a href="http://140.135.113.41/back/changken_center/mstock.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;會員管理</a>
			<br><a href="http://140.135.113.41/back/changken_center/b_board.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;留言回復</a><br>
		<br><font>財務部門</font>
			<br><a href="http://140.135.113.41/back/changken_center/salary.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;薪資管理</a>
			<br><a href="http://140.135.113.41/back/changken_center/financial.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;財務管理</a><br>
        
		<br><a href="http://140.135.113.41/back/changken_center/logout.php"> <input type="submit" name="button" value="登出"></a>
	</div>
<html>

<head>
<meta content="text/html; charset=UTF8" http-equiv="content-type">
<title>清除員工資料</title>
</head>

<body>
<h1 style="text-align: center;">清除員工資料</h1>
<div style="text-align: center;">
<?php 
session_start();
if($_SESSION['level']=="user")
{

	echo"<font color='red'>帳號權限不足！</font>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=http://140.135.113.41/back/changken_center/b_index.php>';
	

 
}
elseif($_SESSION['level']== null)
{
	echo"<font color='red'>您尚未登入！</font>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=http://140.135.113.41/back/changken_center/login.php>';

}
else
{
?>	
	<form method="post" action="edeletec.php" name="delete">
		<table style="text-align: center; width: 100px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">
			<tbody>
				<tr>

					<td style="vertical-align: top;">
						員工編號:<input name="NO" type="text"><br>
						<input name="edelete" value="刪除" type="submit">
						<a href="http://140.135.113.41/back/changken_center/estock2.php"><input type="button" name="button" value="回前頁" /><br>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
<?php	
}
?>
</div>
</body>

</html>