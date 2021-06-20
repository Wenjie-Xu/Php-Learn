<?php
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql = 'call test1();';
    $stmt = $pdo->query($sql);
    $rowset = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->nextRowset();// 结果集指针切换到下一个
    $rowset = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($rowset);
} catch (PDOException $e) {
    echo $e->getMessage();
}
