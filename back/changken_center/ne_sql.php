
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
 


 $name = $_REQUEST['name'];
 $account = $_REQUEST['account'];
 $password = $_REQUEST['password'];
 $address = $_REQUEST['address'];
 $cellphone = $_REQUEST['cellphone'];
 $email = $_REQUEST['email'];
 $depart = $_REQUEST['depart'];
 $salary = $_REQUEST['salary'];



   
 $sql_insert = "INSERT INTO employee (account, password, name, email, cellphone, address, salary, depart) VALUES ('$account', '$password', '$name', '$email', '$cellphone', '$address', '$salary', '$depart');";
 
 
  $result = mysql_query($sql_insert) or die('MySQL insert error');

  $sql_query = "select * from employee";
  $result = mysql_query($sql_query) or die('MySQL query error');
  //$result2 = mysql_query($sql_query) or die('MySQL query error');
  header("refresh:0 ; url=http://140.135.113.41/back/changken_center/estock2.php"); 
  //echo "<script>alert('訂購成功！');</script>"; 
  //header( "location:product2.php");
  
?>

