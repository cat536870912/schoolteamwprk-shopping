

<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
 $dbhost = 'localhost:140.135.113.41';   
 $dbuser = 'root';   
 $dbpass = '1234';   
 $dbname = 'final';
  
 mysql_connect($dbhost, $dbuser, $dbpass);
 mysql_select_db($dbname);
 mysql_query("SET NAMES 'utf8'");
 
 $product =$_REQUEST['product'];
 $num = $_REQUEST['num'];
 $money = $_REQUEST['money'];
 $name = $_REQUEST['name'];
 $address = $_REQUEST['address'];
 $phone = $_REQUEST['phone'];
 $email = $_REQUEST['email'];
 $pay_way = $_REQUEST['pay_way'];


   
 $sql_insert = "INSERT INTO book(product, num, money, name, address, phone, email, pay_way) VALUES ('$product', '$num', '$money', '$name', '$address', '$phone', '$email', '$pay_way') ";
 
 $sql_insert2 = "INSERT INTO income(class, detail, price) VALUES ('訂單', '$product', '$money'*'$num') ";
 
 $sql_update = "UPDATE `product` SET `p_quantity` = p_quantity-'$num'  WHERE `p_name` = '$product' ; ";
 
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  $result2 = mysql_query($sql_update) or die('MySQL update error');
  $result3 = mysql_query($sql_insert2) or die('MySQL insert2 error');
  
  $sql_query = "select * from book";
  $result = mysql_query($sql_query) or die('MySQL query error');
  //$result2 = mysql_query($sql_query) or die('MySQL query error');
  header("refresh:0 ; url=product2.php"); 
  echo "<script>alert('訂購成功！');</script>"; 
  //header( "location:product2.php");
  
?>


