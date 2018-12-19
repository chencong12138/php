<?php
$username = $_GET['username'];
$password = $_GET['password'];
$uer = '陈聪';
$pass = '6592380';
if ($username == $uer && $password == $pass) {
    echo '登陆成功老铁';
} else {
    echo '登录失败';
}
  


?>