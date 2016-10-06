<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['id'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM member where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"m_update_finish.php\">";
		echo "修改會員資料 <br> <br>";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\"  readonly/>(此項目無法修改) <br>";
		echo "姓名：<input type=\"text\" name=\"name\" value=\"$row[1]\" readonly />(此項目無法修改) <br>";
        echo "密碼：<input type=\"password\" name=\"password\" value=\"$row[2]\"  /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"password2\" value=\"$row[2]\" /> <br>";
        echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[3]\" /> <br>";
        echo "手機：<input type=\"text\" name=\"cellphone\" value=\"$row[4]\" /> <br>";
        echo "生日：<input type=\"date\" name=\"birthday\" value=\"$row[5]\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
		?>
		<a href="index2.php"><input type="button" name="button" value="離開" /></a>
		<?php
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>