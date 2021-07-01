<?php

// 连接数据库
try {
    $dsn = "mysql:host=127.0.0.1;dbname=test";
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    // 设置字符集
    $pdo->query('set names utf8');
} catch(PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT * FROM CityInfo WHERE upid = :upid;";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":upid",$upid,PDO::PARAM_INT);
//接受变量
$upid = $_GET['upid'] ? $_GET['upid'] : 0;
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);