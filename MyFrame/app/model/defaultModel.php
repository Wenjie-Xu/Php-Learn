<?php
namespace app\model;

use core\lib\model;

class defaultModel extends model{
    /**
     * model类的数据库连接
     */
    protected static $datasource = 'uco';

    public function __construct()
    {
        parent::__construct(self::$datasource);
    }
}
?>