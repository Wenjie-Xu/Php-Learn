<?php

namespace app\ctrl;

use \app\model\model;

class indexCtrl extends \core\myframe
{
    public function index()
    {
        $title = '视图文件';
        $testModel = new model();
        $stmt = $testModel->query("SELECT name FROM userInfo WHERE id = 1");
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        $this->assign('title', $title);
        $this->assign('username', $result['name']);
        $this->display('index.html');
    }
}
