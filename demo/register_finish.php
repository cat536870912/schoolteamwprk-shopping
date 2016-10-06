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



//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $password != null && $password2 != null && $password == $password2)
{
        //新增資料進資料庫語法
        $sql = "insert into member (id, name, password, email, cellphone, birthday) values ('$id', '$name', '$password', '$email', '$cellphone', '$birthday')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '請確認輸入帳號及密碼';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>