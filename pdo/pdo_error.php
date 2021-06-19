<?php
header('content-type:text/html;charset=utf-8');
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=test;';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql = <<<EOF
    SELECT * FROM userIfno;
EOF;
    $result = $pdo->exec($sql);
    if($result === false) {
        echo $pdo->errorCode();
        echo '</br>';
        print_r($pdo->errorInfo());
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}