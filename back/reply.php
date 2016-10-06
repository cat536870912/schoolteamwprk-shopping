<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<title>管理員頁面</title>

<style>
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

.top{
 margin:auto;
 width:60vw;
 text-align:center;
 padding:30px 0 0 0;
 font-family:微軟正黑體;
 font-size:18px;
}
/*.nav{
 background-color:#339;
 padding: 10px 0px;
 }*/
.nav a {
  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  text-transform: uppercase;
}

.nav li {
  display: inline;
}
.CSSTableGenerator {
 margin:auto;
 padding:0px;
 width:60vw;
 }
 .CSSTableGenerator table{
    border-collapse: collapse;
    border-spacing: 0;
 width:100%;
 height:100%;
 margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
 -moz-border-radius-bottomright:9px;
 -webkit-border-bottom-right-radius:9px;
 border-bottom-right-radius:9px;
}
.CSSTableGenerator table tr:first-child td:first-child {
 -moz-border-radius-topleft:9px;
 -webkit-border-top-left-radius:9px;
 border-top-left-radius:9px;
}
.CSSTableGenerator table tr:first-child td:last-child {
 -moz-border-radius-topright:9px;
 -webkit-border-top-right-radius:9px;
 border-top-right-radius:9px;
 
}.CSSTableGenerator tr:last-child td:first-child{
 -moz-border-radius-bottomleft:9px;
 -webkit-border-bottom-left-radius:9px;
 border-bottom-left-radius:9px;
 
}.CSSTableGenerator a{
 background-color:#005fbf;
 color:white;
}

}.CSSTableGenerator tr:hover td{
 background-color:#005fbf;
 color:white;
}
.CSSTableGenerator td{
 vertical-align:middle;
 background-color:#e5e5e5;
 border:1px solid #999999;
 border-width:0px 1px 1px 0px;
 text-align:left;
 padding:8px;
 font-size:16px;
 font-family:Arial,微軟正黑體;
 font-weight:normal;
 color:#000000;
}.CSSTableGenerator tr:last-child td{
 border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
 border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
 border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
  text-align:center;
  font-size:20px;
  font-family:Arial, 微軟正黑體;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
}

 
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
        <br><a href="http://140.135.113.41/back/purchase.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;進貨管理</a>
   		<br><a href="http://140.135.113.41/back/stock.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;庫存管理</a> <br>
  <br><font>銷售部門</font>
        <br><a href="http://140.135.113.41/back/changken_center/list.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;訂單管理</a><br>
 <br> <font>人事部門</font>
        <br><a href="http://140.135.113.41/back/changken_center/estock2.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;員工管理</a><br>
 <br> <font>客服部門</font>
        <br><a href="http://140.135.113.41/back/changken_center/mstock.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;會員管理</a>
   		<br><a href="http://140.135.113.41/back/b_board.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;留言回復</a><br>
  <br><font>財務部門</font>
  		<br><a href="http://140.135.113.41/back/changken_center/salary.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;薪資管理</a>
   		<br><a href="http://140.135.113.41/back/financial.php" style="text-decoration:none; color:#666666; font-size:15px">&nbsp;&nbsp;&nbsp;&nbsp;財務管理</a><br>
   <br><a href="http://140.135.113.41/back/changken_center/logout.php"> <input type="submit" name="button" value="登出"></a>
  </div>
  </div>


<div class="top">
 <h3>管理員頁面</h3>
</div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<body>
<form name="form" method="post" action="reply_connect.php">
編號:<input type="text" name="no" /> <br>
回覆:<textarea name="content" cols="45" rows="5"></textarea>
<input type="submit" name="button" value="送出" />
</form>
</body>
</html>