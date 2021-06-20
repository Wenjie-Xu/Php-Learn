<?php
// 通过php配置文件来连接
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql="SELECT name,age FROM userInfo;"; 
    $stmt = $pdo->prepare($sql);// 准备一条sql语句
    $result = $stmt->execute();
    echo '结果集中一共有：'.$stmt->columnCount().'列</br>';
    // 将结果集的列绑定到变量上（php中字段重命名输出）
    $stmt->bindColumn(1,$name);
    $stmt->bindColumn(2,$age);
    while($stmt->fetch(PDO::FETCH_BOUND)){
        echo '用户名：'.$name.'- 年龄：'.$age.'</br>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
