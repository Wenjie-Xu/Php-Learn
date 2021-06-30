<?php
// 设置字符集编码
header("Content-type:text/html;charset=utf-8");

$method=$_SERVER['REQUEST_METHOD'];

if($method =='GET') {
    // 判断是否传值
    if (empty($_GET['name']) || empty($_GET['message'])) {
        exit("内容不能为空！");
    } else {
        exit($_GET['name'].$_GET['message']);
    }
} else {
    if (empty($_POST['name']) || empty($_POST['message'])) {
        exit("内容不能为空！");
    } else {
        exit($_POST['name'].$_POST['message']);
    }
}