
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("b_login.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM  back_m where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
		$_SESSION['id'] = $id;
		if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("登入成功！"); 

				window.location.replace("b_index.php"); 

			</script>'; 
		}

} 

        
    //   echo '登入成功!';
	//	echo '<meta http-equiv=REFRESH CONTENT=1;url=b_index.php>';
else
{
        if ($HTTP_SESSION_VARS['voteok'.$_GET['vote_id']] = 1) 
		{ 

			echo '<script language="javascript"> 

				alert("您沒有權限！"); 

				window.location.replace("b_login.php"); 

			</script>'; 
		}
		//echo '您沒有權限!';
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=b_login.php>';
}
?>
