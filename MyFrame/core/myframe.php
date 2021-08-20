<?php
namespace core;

class myframe {
    public static $classMap = array();

    public static function run(){
        p('OK');
    }

    public static function load($class){
        if(isset(self::$classMap[$class])){
            return true;
        } else {
            $class = str_replace("\\", "/", $class);
            $file = MYFRAME . "/" . $class . ".php";
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}
?>