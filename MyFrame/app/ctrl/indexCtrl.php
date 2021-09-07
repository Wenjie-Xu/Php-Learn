<?php

namespace app\ctrl;

use \app\model\defaultModel;

class indexCtrl extends \core\myframe
{
    public function index()
    {
        $title = 'Index';
        $defaultModel = new defaultModel();
        $this->assign('title', $title);
        $this->assign('username', 'xuwenjie');
        $this->display('index.html');
    }
    
    public function test()
    {
        $title = 'Test';
        $defaultModel = new defaultModel();
        $this->assign('title', $title);
        $this->assign('username', 'xuwenjie');
        $this->display('test.html');
    }
}
