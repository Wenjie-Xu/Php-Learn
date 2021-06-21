<?php
// 该文件是用来接受用户的订单信息并写入队列的一个文件
try {
    $dsn = "mysql:host=127.0.0.1;dbname=test;";
    $username = "root";
    $password = "123456";
    $pdo = new PDO($dsn,$username,$password);
    if (!empty($_GET['mobile'])){
        // 这里是订单中心的处理流程
        // 把用户传过来的数据进行过滤
        $order_id = rand(10000,99999);
        $mobile = $_GET['mobile'];
        $created = date('Y-m-d H:i:s',time());
        $status = 0;
        // 将生成的订单信息存入队列表中
        $insert_sql = "INSERT INTO order_queue(`order_id`,`mobile`,`created`,`status`)
                       VALUES(:order_id,:mobile,:created,:status);";
        $stmt = $pdo->prepare($insert_sql);
        $stmt->bindParam(":order_id",$order_id,PDO::PARAM_STR);
        $stmt->bindParam(":mobile",$mobile,PDO::PARAM_STR);
        $stmt->bindParam(":created",$created,PDO::PARAM_STR);
        $stmt->bindParam(":status",$status,PDO::PARAM_INT);
        // 执行
        $result = $stmt->execute();
        if($result) {
            echo $order_id.'保存成功';
        }else {
            echo '保存失败';
        }
    }
}catch (PDOException $e) {
    echo $e->getMessage();
}