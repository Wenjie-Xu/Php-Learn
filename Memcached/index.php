<?php
$m = new Memcached();
$server_array = array(
    ['127.0.0.1', 11211],
);
$m->addServers($server_array);
$m->add('username', 'xuwenjie', 600);
$m->replace('username', 'xuwenjie', 600);

// $m->set('age', 24, 600);
$m->decrement('age',1);

// print_r($m->delete('age'));

echo $m->get('age');
echo $m->get('country');
