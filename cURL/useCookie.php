<?php

$data = "username=xuwenjie&password=123";
$curl_obj = curl_init();// 初始化
curl_setopt($curl_obj, CURLOPT_URL, "www.taobao.com/login");// 设置访问的URL
curl_setopt($curl_onj, CURLOPT_RETURNTRANSFER, true);// 设置不直接打印

date_default_timezone_get('PRC');
curl_setopt($curl_obj, CURLOPT_COOKIESESSION, true);// 支持cookie和session
curl_setopt($curl_obj, CURLOPT_COOKIEFILE, 'cookiefile');// 设置保存cookie
curl_setopt($curl_obj, CURLOPT_COOKIE, session_name(). '='. session_id());// 设置cookie的内容
curl_setopt($curl_obj, CURLOPT_COOKIEJAR, 'cookiefile');// 设置读取cookie
curl_setopt($curl_obj, CURLOPT_HEADER, 0);// 设置不打印头信息
curl_setopt($curl_obj, CURLOPT_FOLLOWLOCATION, 1);// 能够让cURL支持页面链接跳转

curl_setopt($curl_obj, CURLOPT_POST, 1);// 设置请求方式
curl_setopt($curl_obj, CURLOPT_POSTFIELDS, $data);// 设置post请求参数
curl_setopt($curl_obj, CURLOPT_HTTPHEADER, array("Content-Type:application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($city_code)));
// 设置请求头
curl_setopt($curl_obj, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);//设置AGENT
curl_exec($curl_obj);// 运行

// 登陆成功后的步骤
curl_setopt($curl_obj, CURLOPT_URL, "www.taobao.com/space/index");
curl_setopt($curl_obj, CURLOPT_POST, 0);// 直接请求
curl_setopt($curl_obj, CURLOPT_HTTPHEADER, array("Content-type:text/xml"));
$output = curl_exec($curl_obj);
curl_close($curl_obj);// 关闭
echo $output;