<?php
header('content-type:text/html;charset=utf-8');
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=test;';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    // exec() 执行非查询语句，返回影响的行数

// 建表
    $sql = <<<EOF
        CREATE TABLE userInfo(
            id int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
            name varchar(50) NOT NULL COMMENT '姓名',
            age int NOT NULL COMMENT '年龄',
            PRIMARY KEY (`id`)
        );
EOF;
    // $create_result = $pdo->exec($sql);
    // var_dump($create_result);

// 插入数据
    $insert_sql = <<<EOF
    INSERT INTO userInfo(`name`,`age`)
    VALUES
    ('wenjie',26);
EOF;
    // $insert_result = $pdo->exec($insert_sql);
    // echo '插入的行数为：'.$insert_result.'</br>';
    // echo '最后一行的id号为：'.$pdo->lastInsertId();
// 删除数据
    $del_sql = <<<EOF
    DELETE FROM userInfo WHERE id = 5;
EOF;
    $del_result = $pdo->exec($del_sql);
    echo '共删除：'.$del_result;

// 更新数据
    $update_sql = <<<EOF
    UPDATE userInfo
    SET name = 'Xuwenjie'
    WHERE name = 'xuwenjie';
EOF;
    // $update_result = $pdo->exec($update_sql);
    // echo $update_result;
} catch (PDOException $e) {
    echo $e->getMessage();
}