<?php

namespace core;

use Exception;

class myframe
{
    public static $classMap = array();
    public $assign;

    public static function run()
    {
        \core\lib\log::init();
        \core\lib\log::log($_SERVER, 'SecondLog');

        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
        $ctrlClass = '\\' . MODULE . '\\ctrl\\' . $ctrlClass . 'Ctrl';
        if (is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        } else {
            throw new \Exception('找不到控制器', $ctrlClass);
        }
    }

    public static function load($class)
    {
        if (isset(self::$classMap[$class])) {
            return true;
        } else {
            $class = str_replace("\\", "/", $class);
            $file = MYFRAME . "/" . $class . ".php";
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP . '/views/' . $file;
        if (is_file($file)) {
            extract($this->assign);
            include $file;
        }
    }
}
