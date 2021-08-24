<?php
namespace core\lib;

use \core\lib\conf;

class log{
    /**
     * 1.确定日志的存储方式
     * 
     * 
     * 2.写日志
     */
    static $log;
    public static function init(){
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drives\log\\'.$drive;
        self::$log = new $class();
    }

    public static function log($message, $filename)
    {
        self::$log->log($message, $filename);
    }
}

?>