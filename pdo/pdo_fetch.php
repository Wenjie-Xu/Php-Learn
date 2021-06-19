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
    $stmt = $pdo->prepare($sql);// 准备一条sql语句
    $res = $stmt->execute();// 返回执行结果（boolean）
    $onerow = $stmt->fetch();// 获得结果集中的一条记录(stmt可迭代对象)
    // 传入静态常量（类常量）-- 直接传参
    // $rows = $stmt->fetchAll(PDO::FETCH_BOTH);
    // $assoc_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 提前设置返回模式
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();
    foreach($rows as $key => $row){
        print_r($row);
        echo '</br>';
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
