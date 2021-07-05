<?php

use Human as GlobalHuman;

abstract class CanEat {
    // 吃的方法可以有不同的实现
    abstract public function eat($food);

    // 呼吸可以具体实现
    public function breath(){
        echo 'breathing';
    }
}


class Human extends CanEat {
    public function eat($food){
        echo 'Human eating '.$food;
    }
}

$human1 = new Human();
$human1->eat('apple');