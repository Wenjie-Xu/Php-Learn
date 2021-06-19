<?php
// 通过php配置文件来连接
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql=<<<EOF
    SELECT * FROM userInfo;
EOF;
    //query()查询，返回PDOStatement对象
    $stmt = $pdo->query($sql);
    foreach($stmt as $key => $row){
        print_r($row);
        echo '</br>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
