<?php
// 这个文件主要是配送系统处理队列中的订单并进行标记的一个文件
try {
    $dsn = "mysql:host=127.0.0.1;dbname=test;";
    $username = "root";
    $password = "123456";
    $pdo = new PDO($dsn,$username,$password);
    //1、先把要处理的记录更新为等待处理
    $update_sql1 = "UPDATE order_queue SET status=2,updated=now() WHERE status = 0;";
    $afftect_rows1 = $pdo->exec($update_sql1);
    //2、选择出刚刚更新的数据，然后进行配送系统的处理
    if($afftect_rows1){
        // 选择要处理的订单，交给配货系统进行处理……
        // 处理完之后把订单更新为已处理
        $update_sql2 = "UPDATE order_queue SET status=1,updated=now() WHERE status = 2;";
        $afftect_rows2 = $pdo->exec($update_sql2);
        if($afftect_rows2){
            echo '处理成功:'.$afftect_rows2;
        }else {
            echo '处理失败!';
        }
    }else {
        echo '没有要处理的订单!';
    }
    //3、把处理过的数据更新为已完成
}catch (PDOException $e) {
    echo $e->getMessage();
}