<?php
    namespace core\lib\drives\log;

    use core\lib\conf;

    // 文件系统
    class file{
        private $path;

        public function __construct()
        {
            $option = conf::get('OPTION', 'log');
            $this->path = $option['path'];
        }

        public function log($message, $filename){
            /**
             * 1.确认文件的存储位置是否存在 新建一个
             * 2.写入日志
             */
            $filename = $filename .'.log';
            $path = $this->path . date('YmdH') . '/';
            if(!is_dir($path)){
                mkdir($path, 0777, true);
            }
            $message = '['.date('Y-m-d H:i:s').']' . json_encode($message);
            return file_put_contents($path.$filename, $message.PHP_EOL, FILE_APPEND);
        }
    }
?>