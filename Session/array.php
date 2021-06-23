<?php

session_start();

$userList = [
    'user1'=>['id'=>1,'name'=>'one'],
    'user2'=>['id'=>2,'name'=>'two'],
];

$_SESSION = $userList;