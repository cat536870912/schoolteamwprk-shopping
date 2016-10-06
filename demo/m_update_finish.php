<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
$birthday = $_POST['birthday'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['id'] != null && $password != null && $password2 != null && $password == $password2)
{
        $id = $_SESSION['id'];
    
        //更新資料庫資料語法
        $sql = "update member set name='$name', password='$password', email='$email', cellphone='$cellphone', birthday='$birthday' where id='$id'";
        if(mysql_query($sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>