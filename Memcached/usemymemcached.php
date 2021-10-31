<?php
include 'MyMemcached.php';

$m = new MyMemcached();
$m->addServer(['127.0.0.1', 11211]);
$m->set('school', 'zjcj', 0);
echo $m->get('school');
?>