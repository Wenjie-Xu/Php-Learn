<?php
$m = new Memcached();
$server_array = array(
    ['127.0.0.1', 11211],
);
$m->addServers($server_array);

// var_dump($m);exit;


$m->flush();

$data = [
    'username'=>'xuwenjie',
    'age'=>24
];

$m->setMulti($data);

print_r($m->getMulti(['username', 'age']));

$m->deleteMulti(['school', 'company']);
// echo $m->getResultCode();
echo $m->getResultMessage();