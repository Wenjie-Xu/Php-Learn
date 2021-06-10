<?php
$username = $_POST["username"];
$password = $_POST["password"];

$link = mysqli_connect("127.0.0.1","root","123456",$port=3306) or die("Connect Error");

mysqli_set_charset($link,"utf8");
mysqli_select_db($link, "test") or die("Database Open Error");
$sql = "SELECT 1 FROM user WHERE name = '{$username}' AND password='$password';";
$sql = mysqli_escape_string($link, $sql);
$result = mysqli_query($link, $sql);

if(mysqli_num_rows == 1) {
    exit("<script>
        location.href='index.php';
    </script>");
} else {
    exit("<script>alert('登陆失败！');location.href='login.php';</script>");
}