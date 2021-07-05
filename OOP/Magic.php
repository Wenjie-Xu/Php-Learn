<?php
class Magic{
    public function __toString()
    {
        return 'This is Magic obj';
    }

    public function __invoke()
    {
        echo 'This is a obj';
    }
    // 方法的重载
    public function __call($name, $arguments){
        echo $name.' method is not exists';
    }

    public static function __callStatic($name, $arguments)
    {
        echo $name.' staitc method is not exists';
    }
}

$mg = new Magic();
echo $mg;// __tostring()
$mg();// __invoke()
echo '</br>';
$mg->hello(); // __call()
Magic::hello();// __callStatic()
