<?php

session_start();

// 将变量置为空数组
$_SESSION = [];

if(init_get("session.use_cookies")){
    // 如果使用cookie传递session，那么得到cookie的相关参数
    $params = session_get_cookie_params();
    // 使cookie过期
    setcookie(
        session_name(),session_id(),time()-1,
        $params['path'],$params['domain'],
        $params['secure'],$params['httponly']
    );
}

// 销毁会话
session_destroy();