<?php
// 通过php配置文件来连接
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql="SELECT name,age FROM userInfo WHERE name =?;";
    $stmt = $pdo->prepare($sql); 
    $stmt->bindParam(1, $uname, PDO::PARAM_STR);
    $uname = 'xuwenjie';
    $stmt->debugDumpParams();
    $stmt->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
