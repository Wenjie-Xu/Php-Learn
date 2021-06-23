<?php

session_start();

$_SESSION['name']='xuwenjie';
$_SESSION['age']=24;

// 设置cookieID的失效时间，决定访问session文件的时间
setcookie(session_name(),session_id(),time()+360);

echo '<a href="dumpurl.php?'.session_name().'='.session_id().'">查看session</a>';