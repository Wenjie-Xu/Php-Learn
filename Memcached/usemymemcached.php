<?php
include 'MyMemcached.php';

$m = new MyMemcached();
$m->addServer(array(['127.0.0.1', 11211]));
$m->set('school', 'sjsj', 0);
// $m->s('school', NULL);
echo $m->s('school');
?>