<?php
header('content-type:text/html;charset=utf-8');
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=test;';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    echo '自动提交'.$pdo->getAttribute(PDO::ATTR_AUTOCOMMIT).'</br>';
    echo 'PDO默认的错误处理模式'.$pdo->getAttribute(PDO::ATTR_ERRMODE);
} catch (PDOException $e) {
    echo $e->getMessage();
}