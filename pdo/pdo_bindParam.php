<?php
// 通过php配置文件来连接
try {
    $dsn = 'docker';
    $username = 'root';
    $password = '123456';
    $pdo = new PDO($dsn, $username, $password);
    $sql="INSERT INTO userInfo(`name`,`age`)VALUES(:uname,:age)";
    // $sql="INSERT INTO userInfo(`name`,`age`)VALUES(?,?)";
    
    $stmt = $pdo->prepare($sql);// 准备一条sql语句

    // 绑定参数，命名参数或者从1开始的索引
    /* $stmt->bindParam(1,$uname,PDO::PARAM_STR);
       $stmt->bindParam(2,$age,PDO::PARAM_STR);*/
    // 第二个参数不能直接传值
    $stmt->bindParam(":uname",$uname,PDO::PARAM_STR);
    $stmt->bindParam(":age",$age,PDO::PARAM_STR);
    $uname = '667';
    $age = '27';
    $result = $stmt->execute();
    var_dump($result);

} catch (PDOException $e) {
    echo $e->getMessage();
}
