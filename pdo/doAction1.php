<?php
header("content-type:text/html;charset=utf-8");
$uname = $_POST['username'];
$age = $_POST['age'];

try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    // 预处理语句中的占位符（命名参数）
    // $sql="SELECT * FROM userInfo WHERE name = ? AND age = ?"; 索引形式
    $sql="SELECT * FROM userInfo WHERE name = :uname AND age = :age;";// 关联形式
    $stmt = $pdo->prepare($sql);
    // $stmt->execute(array($uname,$age));// 传参
    $stmt->execute(array(":uname"=>$uname,":age"=>$age));// 传参
    echo '<script> window.alert("'.$stmt->rowCount().'"); history.back();</script>';
} catch (PDOException $e) {
    echo $e->getMessage();
}