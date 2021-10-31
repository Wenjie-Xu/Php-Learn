<?php
class MyMemcached
{
    private $type = 'Memcached';
    private $m;
    private $error;
    public function __construct()
    {
        if(!class_exists($this->type)){
            $this->error = 'No '.$this->type;
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
    }

    public function s($key, $value = '', $time = 0)
    {
        $number = func_get_args();
        if ($number == 1) {
            $this->get($key);
        } else if ($number >= 2) {
            if ($value === NULL) {
                $this->delete($key);
            } else {
                $this->set($key, $value, $time);
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
