<?php
$curl_obj = curl_init();
curl_setopt($curl_obj, CURLOPT_URL, "sftp://localhost/Documents/mygit/newfile.text");
curl_setopt($curl_obj, CURLOPT_HEADER, 0);
curl_setopt($curl_obj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_obj, CURLOPT_TIMEOUT, 300);// 300s超时
curl_setopt($curl_obj, CURLOPT_USERPWD, "apple:   ");// 登陆用户名

$outfile=fopen("newFile.txt", "wb");
curl_setopt($curl_obj, CURLOPT_FILE, $outfile);// 设置保存到本地的文件对象

$rtn = curl_exec($curl_obj);
fclose($outfile);
if(!curl_errno($curl_obj)){
    echo 'RETURN:'.$rtn;
} else {
    echo curl_error($curl_obj);
}

curl_close($curl_obj);

