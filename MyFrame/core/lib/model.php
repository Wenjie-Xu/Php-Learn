<?php
namespace core\lib;

use \core\lib\conf;
use Medoo\Medoo;

class model extends Medoo{
    /**
     * 数据库连接
     */
    protected static $datasource = 'default';

    public function __construct($datasource)
    {  
        if(!isset($datasource)){
            $datasource = self::$datasource;
        }
        $conf = conf::all('database');
        $option = $conf[$datasource];

        try{
            parent::__construct($option);
        } catch(\Exception $e) {
            $e->getMessage();
        }
    }
}
