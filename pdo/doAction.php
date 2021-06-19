<?php
header("content-type:text/html;charset=utf-8");
$uname = $_POST['username'];
$age = $_POST['age'];

try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);

    $uname = $pdo->quote($uname);
    $age = $pdo->quote($age);
    $sql="SELECT * FROM userInfo WHERE name = {$uname} AND age = {$age};";
    // print_r($sql);exit();
    $stmt = $pdo->query($sql);
    echo '<script> window.alert("'.$stmt->rowCount().'"); history.back();</script>';
} catch (PDOException $e) {
    echo $e->getMessage();
}