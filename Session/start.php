<?php
header("content-type:text/html;charset=utf-8");
//开启会话
session_start();

$_SESSION['username'] = 'xuwenjie';
$_SESSION['email'] = '123456';

echo "session的名字：",session_name(),"</br>";
echo "session的ID：",session_id(),"</br>";