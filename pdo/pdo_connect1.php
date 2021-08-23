<?php
// 通过参数的形式连接数据库
try {
    // dsn是数据源
    $dsn = 'mysql:host=127.0.0.1;dbname=test';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    var_dump($pdo);
} catch (PDOException $e) {
    echo $e->getMessage();
}
