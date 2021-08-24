<?php

namespace core\lib;

class conf
{
    private static $confs = array();
    // 获得配置文件中的某个配置
    public static function get($name, $file)
    {
        /**
         * 1.判断配置文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */
        if (isset(self::$confs[$file])) {
            $confArray = self::$confs[$file];
        } else {
            $filepath = CORE . '/config/' . $file . '.php';
            if (is_file($filepath)) {
                $confArray = include $filepath;
                self::$confs[$file] = $confArray;
            } else {
                throw new \Exception('配置文件不存在');
            }
        }
        if (isset($confArray[$name])) {
            return $confArray[$name];
        } else {
            throw new \Exception('配置不存在');
        }
    }

    // 获取配置文件
    public static function all($file){
        if (isset(self::$confs[$file])) {
            $confArray = self::$confs[$file];
        } else {
            $filepath = CORE . '/config/' . $file . '.php';
            if (is_file($filepath)) {
                $confArray = include $filepath;
                self::$confs[$file] = $confArray;
            } else {
                throw new \Exception('配置文件不存在');
            }
        }
        return $confArray;
    }
}
