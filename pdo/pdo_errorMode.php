<?php
/** PDO::ATTR_ERRMODE
 * PDO::ERRORMODE_SLIENT:静默模式（默认模式）
 * PDO::ERRORMODE_WARNING:警告模式
 * PDO::ERRMODE_EXCEPTION:异常模式（推荐）
 */
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    // 修改错误模式
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM users;';
    $pdo->query($sql);
    // print_r($pdo->errorInfo());
} catch (PDOException $e) {
    echo $e->getMessage();
}
