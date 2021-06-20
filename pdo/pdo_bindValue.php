<?php
// 通过php配置文件来连接
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql="INSERT INTO userInfo(`name`,`age`)VALUES(:uname,:age)"; 
    $stmt = $pdo->prepare($sql);// 准备一条sql语句
    $stmt->bindParam(":uname",$uname,PDO::PARAM_STR);
    // 绑定始终不变的占位符
    $stmt->bindValue(":age",'26');
    $uname = 'Mr.A';
    $result = $stmt->execute();
    var_dump($result);

} catch (PDOException $e) {
    echo $e->getMessage();
}
