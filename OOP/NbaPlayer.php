<?php
class Human {
    public static $president='David';
    public $name;
    protected $logo = "To Be No.1";// 类和子类访问
    private $age = 40; // 类的内部被访问

    public function getPre(){
        echo self::$president;
    }

    // 私有成员访问方式和假封装
    public function eat($food){
        echo ($this->age-2).' is eating '.$food;
    }
}
// 类的定义以关键字class开始
// 类的名称通常每个单词第一个字母大写
class NbaPlayer extends Human{
    // 类的属性（默认值）
    public $team;

    // 构造函数，对象被实例化的时候自动调用
    // 实例的属性值
    // 如果没有传递构造函数中的参数，则报错。多传没关系
    public function __construct($name, $team)
    {
        // $this是php里的伪变量
        $this->name = $name;
        $this->team = $team;
    }

    // 方法
    public function logo(){
        echo $this->logo;
    }

    // 析构函数（对象销毁时调用）
    public function __destruct()
    {
        echo 'destoring……';
    }
}

// 类到对象的实例化
$player01 = new NbaPlayer('james','HEAT');
$player02 = new NbaPlayer('jordan','Bull');
$player01->eat('apple');// 子类继承父类的方法
$player01->logo();//protected访问控制
$player02->getPre();
Human::$president = 'Adam';
$player01->getPre();
echo $player01->name;