<?php
/**
 *changken會員系統專用函數庫
 *簡介:為促進程式開發人員方便開發，changken特別製作專用函數庫。
 *作者:changken 
 *使用方式:請將函數直接複製即可。注意！一定要引入此函數庫，不然不能使用！
 *函數:reg()、login()、update()、delete()、logout()
 */
//註冊函數
function reg($username,$email,$password,$password2,$password_md5,$level)
{
if($username==null)
{
echo"<font color='red'>錯誤！使用者名稱不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password==null)
{
echo"<font color='red'>錯誤！密碼不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password2==null)
{
echo"<font color='red'>錯誤！密碼(再輸入一次)不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
elseif($password!=$password2)
{
echo"<font color='red'>錯誤！密碼輸入不一致！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
else
{
$sql="INSERT INTO user (username, email, password, level) VALUES ('$username', '$email', '$password_md5', '$level');";
if(mysql_query($sql))
{
echo"<font color='green'>註冊成功！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
else
{
echo"<font color='red'>註冊失敗！</font>";
echo'<meta http-equiv="refresh" content="2; url=reg.php">';
}
}
}
//登入函數
function login($username,$password,$password_md5)
{
$sql="SELECT * FROM user WHERE username='$username';";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
if($username==null)
{
echo"<font color='red'>錯誤！使用者名稱不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
elseif($password==null)
{
echo"<font color='red'>錯誤！密碼不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
elseif($username!=$row[1])
{
	  if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("您沒有權限！"); 

				window.location.replace("login.php"); 

			</script>'; 
		}
/*echo"<font color='red'>錯誤！查無使用者！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';*/
}
elseif($password_md5!=$row[3])
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("密碼錯誤！"); 

				window.location.replace("login.php"); 

			</script>'; 
		}
/*echo"<font color='red'>錯誤！密碼錯誤！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';*/
}
else
{
if($row[4]=="sales")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:銷售部門"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:中階管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="sales";
}
elseif($row[4]=="fm")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:財務部門"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:中階管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="fm";
}
elseif($row[4]=="wh")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:倉儲部門"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:中階管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="wh";
}
elseif($row[4]=="cus")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:客服部門"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:中階管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="cus";
}
elseif($row[4]=="hr")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:人事部門"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:中階管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="hr";
}
elseif($row[4]=="admin")
{
	if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功\n您的會員權限為:總經理"); 

				window.location.replace("http://140.135.113.41/back/b_index.php"); 

			</script>'; 
		}
/*echo"<font color='green'>登入成功！</font>";
echo"您的會員權限為:高級管理員";
echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';*/
$_SESSION['username']=$username;
$_SESSION['level']="admin";
}
else
{
echo"<font color='red'>登入失敗！</font>";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
}
}
//更新帳號資訊函數
function update($username,$email,$password_md5,$level)
{
$sql = "UPDATE user SET email = '$email', password = '$password_md5', level = '$level' WHERE username='$username';";
if(mysql_query($sql))
{
echo"<font color='green'>更新成功！</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
else
{
echo"<font color='red'>更新失敗！</font>";
echo'<meta http-equiv="refresh" content="2; url=member.php">';
}
}
//刪除會員函數(限管理員可使用)
$sql="SELECT * FROM member";
$id = $_POST['id'];
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
function delete($id)
{
	if($_SESSION['level']=="user")
	{
		
		echo"<font color='red'>帳號權限不足！</font>";
		echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/mstock.php">';
		
	}
	elseif($_SESSION['level']==null)
	{
	echo"<font color='red'>您尚未登入！</font>";
	echo'<meta http-equiv="refresh" content="2; url=login.php">';
	}
	else
	{
		$sql = "DELETE FROM member WHERE id = '$id';";
		if(mysql_query($sql))
		{
			echo"<font color='green'>刪除成功！</font>";
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/mstock.php">';
		}
		else
		{
			echo"<font color='red'>刪除失敗！</font>";
			 //echo "Error: " . $sql . "<br>" . $conn->error;
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/mstock.php">';
		}
	}
}


function look()
{
	if($_SESSION['level']=="admin")
	{
		/*if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("請點確認~"); 

				window.location.replace("http://140.135.113.41/back/changken_center/estock2.php"); 

			</script>'; 
		}*/
		
		echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/estock2.php">';
		
	}
	else
	{
		/*if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("權限不足！"); 

				window.location.replace("http://140.135.113.41/back/changken_center/estock2.php"); 

			</script>'; 
		}*/
		echo"<font color='red'>帳號權限不足！</font>";
		echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/b_index.php">';
	}
		
	
	
}

$sql="SELECT * FROM employee";
$NO = $_POST['NO'];
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
function edelete($NO)
{
	if($_SESSION['level']=="sales" or $_SESSION['level']=="fm" or $_SESSION['level']=="wh" or $_SESSION['level']=="cus")
	{
		
		echo"<font color='red'>帳號權限不足！</font>";
		echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/mstock.php">';
		
	}
	elseif($_SESSION['level']==null)
	{
	echo"<font color='red'>您尚未登入！</font>";
	echo'<meta http-equiv="refresh" content="2; url=login.php">';
	}
	else
	{
		$sql = "DELETE FROM employee WHERE NO = '$NO';";
		if(mysql_query($sql))
		{
			echo"<font color='green'>刪除成功！</font>";
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/estock2.php">';
		}
		else
		{
			echo"<font color='red'>刪除失敗！</font>";
			 //echo "Error: " . $sql . "<br>" . $conn->error;
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/estock2.php">';
		}
	}
}

$sql="SELECT * FROM book";
$no = $_POST['no'];
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
function ldelete($no)
{
	if($_SESSION['level']=="hr" or $_SESSION['level']=="fm" or $_SESSION['level']=="wh" or $_SESSION['level']=="cus")
	{
		
		echo"<font color='red'>帳號權限不足！</font>";
		echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/mstock.php">';
		
	}
	elseif($_SESSION['level']==null)
	{
	echo"<font color='red'>您尚未登入！</font>";
	echo'<meta http-equiv="refresh" content="2; url=login.php">';
	}
	else
	{
		$sql = "DELETE FROM book WHERE no = '$no';";
		if(mysql_query($sql))
		{
			echo"<font color='green'>刪除成功！</font>";
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/list.php">';
		}
		else
		{
			echo"<font color='red'>刪除失敗！</font>";
			 //echo "Error: " . $sql . "<br>" . $conn->error;
			echo'<meta http-equiv="refresh" content="2; url=http://140.135.113.41/back/changken_center/list.php">';
		}
	}
}
//登出函數
function logout()
{
unset($_SESSION['username']);
unset($_SESSION['level']);
echo "登出中...";
echo'<meta http-equiv="refresh" content="2; url=login.php">';
}
?>