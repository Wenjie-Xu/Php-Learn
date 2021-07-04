<?php
class BaseClass{
    const CON1 = 'constant1';
    public static $name = 'base';
    
    public $age = 'gita';

    public function test(){
        echo "Base::test";
    }

    // 加final关键字，可以让子类没有办法重写
    final public function test1(){
        echo "Base::test1";
    }
}

class ChildClass extends BaseClass {
    const CON = "const value";// 类中的常量
    // 子类中和父类完全一样的方法，可以重写
    public function test(){
        echo static::$name;
    }
}

$ch1 = new ChildClass();
$ch1->test();