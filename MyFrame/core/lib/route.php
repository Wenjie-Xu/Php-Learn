<?php

namespace core\lib;

/**
 * 路由类的作用就是：当访问的是//xxx.com/index/index
 * 将控制访问index控制器里的index方法
 */
class route
{
    // xxx.com/index.php/index/index
    // xxx.com/index/index
    /**
     * 1. 隐藏index.php(.htaccess-apache)-nginx配置中
     * 2. 获取url中的参数部分
     * 3. 返回对应的控制器和方法
     */
    public $ctrl;
    public $action;

    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/MyFrame/') {
            $path = str_replace('/MyFrame/', '', $_SERVER['REQUEST_URI']);
            $uri_arr = explode('/', trim($path));
            if (isset($uri_arr[0])) {
                $this->ctrl = $uri_arr[0];
                unset($uri_arr[0]);
            }
            if (isset($uri_arr[1])) {
                $this->action = $uri_arr[1];
                unset($uri_arr[1]);
            } else {
                $this->action = 'index';
            }
            // url多余的部分转为GET参数
            // id/1/str/2/test/3
            $count = count($uri_arr) + 2;
            $i = 2;
            while ($i < $count) {
                if(isset($uri_arr[$i + 1])){
                    $_GET[$uri_arr[$i]] = $uri_arr[$i + 1];
                }
                $i += 2;
            }
        } else {
            $this->ctrl = 'index';
            $this->method = 'index';
        }
    }
}
