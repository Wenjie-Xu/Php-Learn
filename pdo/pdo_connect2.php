<?php
//通过uri的形式连接数据库
try {
    $dsn = 'uri:file:///usr/local/var/www/pdo/dsn.txt';
    $username='root';
    $password='123456';
    $pdo = new PDO($dsn, $username, $password);
    var_dump($pdo);
} catch (PDOException $e) {
    echo $e->getMessage();
}