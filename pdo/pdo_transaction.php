<?php
// 通过参数的形式连接数据库
try {
    // dsn是数据源
    $dsn = 'mysql:host=127.0.0.1;dbname=test';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn,$username,$password);
    // 开启事务
    $pdo->beginTransaction();
    $sql1 = "UPDATE scores SET score = score -10 WHERE name='xuwenjie1';";
    $res1 = $pdo->exec($sql1);
    echo '';
    if($res1 == false) {
        throw new PDOException('<script>alert("wenjie扣分失败");</script>');// 抛出异常并输出
    }
    $sql2 = "UPDATE scores SET score = score +10 WHERE name='liuxiaoyue';";
    $res2 = $pdo->exec($sql2);
    if($res1 == false) {
        throw new PDOException('<script>alert("xiaoyue加分失败");</script>');
    }
    $pdo->commit();// 提交事务
    echo '<script>alert("操作成功！");</script>';
}catch (PDOException $e) {
    $pdo->rollBack();// 回滚事务
    echo $e->getMessage();
}