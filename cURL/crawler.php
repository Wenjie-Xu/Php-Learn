<?php
$curl = curl_init();//初始化curl
curl_setopt($curl, CURLOPT_URL, "http://www.baidu.com");//设置访问网页的url
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);// 设置执行后不直接打印出来
$output = curl_exec($curl);//执行，获取html
curl_close($curl);//关闭
echo str_replace("百度", "屌丝", $output);