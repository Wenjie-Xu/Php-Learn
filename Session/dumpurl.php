<?php
// 通过session_id指定读取的session文件
session_id($_GET[session_name()]);
session_start();
print_r($_SESSION);