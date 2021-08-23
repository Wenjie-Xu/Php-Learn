<?php

namespace app\ctrl;

class indexCtrl extends \core\myframe
{
    public function index()
    {
        $title = '视图文件';
        $message = 'Hello World';
        $this->assign('title', $title);
        $this->assign('message', $message);
        $this->display('index.html');
    }
}
