<!doctype html public "-//W3C//DTD XHTML 1.1//EN" "http://www.e3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
$link=mysql_connect("localhost","root","1234");
$sql=mysql_select_db("final");
mysql_query("set names utf8");
$data = mysql_query("select * from product");
$picture = mysql_query("select p_picture from product order by no ASC");
$name = mysql_query("select p_name from product order by no ASC");
$price = mysql_query("select p_price from product order by no ASC");
$count = mysql_query("select p_quantity from product order by no ASC");
$intro = mysql_query("select p_intro from product order by no ASC");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta http-equiv="content-language" content="zh-tw">
    <meta http-equiv="Cache-control" content="public" max-age="180">
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
 <title>吃餅--癡癡牛舌餅</title>
 <link rel="stylesheet" type="text/css" href="http://www.morningshop.tw/hook_minify/index?g=index_css&v=2015031700001&c=&n=v1&p=1450940804&is_draft=">
<script type="text/javascript"> 

</script> 
</head>
<body>
    <div class="site-outter">
    <div class="site-ad-top" >
    <div class="container">	    
      <img src="../demo/images/top.png">
    </div>
    </div>
<header class="site-header" style="background-color: #ffffff">
     <div class="container">
         <div class="inner">
             <nav class="nav-menu">
                 <div class="container">
                     <ul class="menu-one">
                       <li id="A18311"><a href="index2.php">首頁</a></li>
                       <li id="A19639"><a href="story2.php">品牌故事</a></li>
                       <li id="A18312"><a href="product2.php">商品瀏覽</a></li>
                       <li id="A23356"><a href="form.php">客戶服務</a></li>
                     </ul>
                 </div>
             </nav>
          </div>
             <div style="text-align:right">
               <ul>
                 <!--  <a href="register.php">註冊</a>
                   <a href="login.php">登入</a>> -->
                   <a href="index.php">登出</a>
                   <a href="m_update.php">會員資料修改</a>
                   <a href="MyCar.php">購物車</a
               ></ul>
             </div>
     </div>
    </div>
</header>
<center>
<font size="+3">商品總覽</font>
<table>
	<tr> 
        <td >
         名稱：<?php echo mysql_result($name,0);?><br>
         價格：$ <?php echo mysql_result($price,0);?><br>
         剩餘數量：<?php echo mysql_result($count,0);?>個<br>
         介紹：<?php echo mysql_result($intro,0);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=0';" value="加入購物車"> 
        </td>
        

        
		<td align="center"><img src="images/<?php echo mysql_result($picture,0);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
 <tr> 
        <td >
         名稱：<?php echo mysql_result($name,1);?><br>
         價格：$ <?php echo mysql_result($price,1);?><br>
         剩餘數量：<?php echo mysql_result($count,1);?>個<br>
         介紹：<?php echo mysql_result($intro,1);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=1';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,1);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
    <tr> 
        <td >
         名稱：<?php echo mysql_result($name,2);?><br>
         價格：$ <?php echo mysql_result($price,2);?><br>
         剩餘數量：<?php echo mysql_result($count,2);?>個<br>
         介紹：<?php echo mysql_result($intro,2);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=2';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,2);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,3);?><br>
         價格：$ <?php echo mysql_result($price,3);?><br>
         剩餘數量：<?php echo mysql_result($count,3);?>個<br>
         介紹：<?php echo mysql_result($intro,3);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=3';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,3);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
      <tr> 
        <td >
         名稱：<?php echo mysql_result($name,4);?><br>
         價格：$ <?php echo mysql_result($price,4);?><br>
         剩餘數量：<?php echo mysql_result($count,4);?>個<br>
         介紹：<?php echo mysql_result($intro,4);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=4';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,4);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,5);?><br>
         價格：$ <?php echo mysql_result($price,5);?><br>
         剩餘數量：<?php echo mysql_result($count,5);?>個<br>
         介紹：<?php echo mysql_result($intro,5);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=5';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,5);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,6);?><br>
         價格：$ <?php echo mysql_result($price,6);?><br>
         剩餘數量：<?php echo mysql_result($count,6);?>個<br>
         介紹：<?php echo mysql_result($intro,6);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=6';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,6);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,7);?><br>
         價格：$ <?php echo mysql_result($price,7);?><br>
         剩餘數量：<?php echo mysql_result($count,7);?>個<br>
         介紹：<?php echo mysql_result($intro,7);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=7';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,7);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,8);?><br>
         價格：$ <?php echo mysql_result($price,8);?><br>
         剩餘數量：<?php echo mysql_result($count,8);?>個<br>
         介紹：<?php echo mysql_result($intro,8);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=8';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,8);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
    <tr><td align="center">---------------------------------------------------------------</td></tr>
        <tr> 
        <td >
         名稱：<?php echo mysql_result($name,9);?><br>
         價格：$ <?php echo mysql_result($price,9);?><br>
         剩餘數量：<?php echo mysql_result($count,9);?>個<br>
         介紹：<?php echo mysql_result($intro,9);?>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="product_bt" onClick="location='addItem.php?sn=9';" value="加入購物車"> 
        </td>
		<td align="center"><img src="images/<?php echo mysql_result($picture,9);?>.gif" height="150" width="150" ></td>
  	</tr>
    <tr></tr>
</table></center>

<footer class="rwd_footer_001" >
  <div class="container">
    <div class="links">
      <dl>
	    <dt>關於我們</dt>
           <dd><a href="https://www.facebook.com/profile.php?id=100003387815553&ref=ts&fref=ts" target="_blank">曾也馨</a></dd>
          <dd><a href="https://www.facebook.com/profile.php?id=100000254168229&fref=ts" target="_blank">吳育慈</a></dd>
          <dd><a href="https://www.facebook.com/profile.php?id=100001491879476&fref=ts" target="_blank">李欣怡</a></dd>
          <dd><a href="https://www.facebook.com/profile.php?id=100002220294159" target="_blank">洪立蓉</a></dd>
	  </dl>
	  <dl>
		<dt>配送須知</dt>
		  <dd><a href="arrivaltime2.php">到貨時間說明</a></dd>
	   	  <dd><a href="fee2.php">運費及免運門檻</a></dd>
	  </dl>
	  <dl>
		<dt>售後服務說明</dt>
		  <dd><a href="returnproduct2.php">退貨說明</a></dd>
		  <dd><a href="returnmoney2.php">退款說明</a></dd>
	  </dl>
	  <dl>
		<dt>付款方式</dt>
		  <dd><a href="custom2.php">ATM</a></dd>
		  <dd><a href="custom2.php">貨到付款	</a></dd>
	  </dl>
	  <dl>
		<dt>常見問題</dt>
		  <dd><a href="member_problem2.php">帳戶問題	</a></dd>
		  <dd><a href="orderform_problem2.php">訂單問題	</a></dd>
	  </dl>
    </div>		
  </div>
</footer>

<div class="rwd_copyright_001">
  <div class="container" >
      <small>@ 2015 CYIM_MIS_FINAL</small>
	</div>
</div>


<!--- ga code --->
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/928368431/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!--- fa code --->
<noscript>
    <img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=209813999351375&amp;ev=NoScript"/>
</noscript>

<script type="text/javascript" src="http://www.morningshop.tw/c/js/www/minify/jquery_common.js?2015031700001"></script>
<script type="text/javascript" src="http://www.morningshop.tw/min/public_js/2015031700001?xmode=1&no_jquery=1"></script>
<script type="text/javascript" src="http://www.morningshop.tw/min/index_js/no_public/2015031700001?xmode=1&no_jquery=1&is_draft="></script>
</div>
</body>
</html>
