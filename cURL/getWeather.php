<?php

$city_code = "theCityCode=杭州&theUserID=";
$agent ="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36";

// 初始化curl
$curl_obj = curl_init();
// 设置访问的url
curl_setopt($curl_obj, CURLOPT_URL, "http://ws.webxml.com.cn/WebServices/WeatherWS.asmx/getWeather");
// 设置不直接打印
curl_setopt($curl_obj, CURLOPT_RETURNTRANSFER, true);
// 设置访问方式
curl_setopt($curl_obj, CURLOPT_POST, true);
// 设置post的参数
curl_setopt($curl_obj, CURLOPT_POSTFIELDS, $city_code);
// 设置请求头
curl_setopt($curl_obj, CURLOPT_HTTPHEADER, array("Content-Type:application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($city_code)));
//fpm形式执行
// curl_setopt($curl_obj, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// 设置agent
curl_setopt($curl_obj, CURLOPT_USERAGENT, $agent);

// 执行
$info = curl_exec($curl_obj);
if(!curl_errno($curl_obj)){
    echo $info;
} else {
    echo 'cURL Error:'. curl_error($curl_obj);
}
// 关闭
curl_close($curl_obj);