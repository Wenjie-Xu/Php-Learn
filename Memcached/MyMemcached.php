<?php
class MyMemcached
{
    // 兼容性Memecached
    private $type = 'Memcached';

    private $m;
    private $error;
    public function __construct()
    {
        if(!class_exists($this->type)){
            $this->error = 'Class ' . $this->type .' Is Not Exists!';
            return false;
        } else {
            $this->m = new $this->type();
        }
        return $this->m;
    }

    public function addServer($server){
        return $this->m->addServers($server);
    }

    public function set($key, $value, $time)
    {
        return $this->m->set($key, $value, $time);
    }
    
    public function get($key)
    {
        return $this->m->get($key);
    }

    public function delete($key)
    {
        return $this->m->delete($key);
    }

    public function s($key, $value = '', $time = 0)
    {
        $number = count(func_get_args());
        if ($number == 1) {
            return $this->get($key);
        } else if ($number >= 2) {
            if ($value === NULL) {
                return $this->delete($key);
            } else {
                return $this->set($key, $value, $time);
            };
        }
    }

    public function getError(){
        if($this->error){
            return $this->error;
        } else {
            return $this->m->getResultMessage();
        }
    }
}
