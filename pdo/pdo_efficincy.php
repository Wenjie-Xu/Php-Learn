<?php
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=test;';
    $username = 'root';
    $password = '123456';
    $pStartTime = microtime(true);
    for($i=1;$i<=100;$i++){
        $pdo = new PDO($dsn, $username, $password);
    }
    $pEndTime = microtime(true);
    $res1 = $pEndTime-$pStartTime;

    //通过MySQL连接数据库
    $mStartTime = microtime(true);
    for($i=1;$i<=100;$i++){
        $link = mysqli_connect('127.0.0.1','root','123456');
        mysqli_select_db($link, 'test');
    }
    $mEndTime = microtime(true);
    $res2 = $mEndTime-$mStartTime;
    echo 'pdo:'.$res1;
    echo 'mysqli:'.$res2;
} catch (PDOException $e) {
    echo $e->getMessage();
}