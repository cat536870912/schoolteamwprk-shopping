<!-- 設定網頁編碼為UTF-8 -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost:140.135.113.41";
//資料庫名稱
$db_name = "final";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "1234";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
?> 

<!doctype html public "-//W3C//DTD XHTML 1.1//EN" "http://www.e3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta http-equiv="content-language" content="zh-tw">
    <meta http-equiv="Cache-control" content="public" max-age="180">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
 <title>後台登入</title>
 <link rel="stylesheet" type="text/css" href="http://www.morningshop.tw/hook_minify/index?g=index_css&v=2015031700001&c=&n=v1&p=1450940804&is_draft=">
</head><center>
<form name="form" method="post" action="b_connect.php" >
<table border: 5px double rgb(109, 2, 107) align="center"  valign="center" cellpadding="5" cellspacing="5" frame="border" rules="all">
   <tbody>
    <tr>
       <br>後台登入
	</tr>
	<tr>
       <td  align="center"  valign="center" >帳號：<input type="text"  name="id" /></td>
       <td  align="center"  valign="center" >密碼：<input type="password"  name="pw" /></td>
	</tr>
	<tr>
	<td><input type="submit" name="button" value="一般登入"  align="center"  valign="center"  align="center"  valign="center" />&nbsp;&nbsp;</td>
	<td><a href="highback.php"><input type="button" name="button" value="高級登入"  align="center"  valign="center"  align="center"  valign="center" /></a>&nbsp;&nbsp;</td>
	</tr>
	
   </tbody>
 </table>
</form></center>