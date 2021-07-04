<?php
interface ICanEat {
    public function eat($food);
}

class Human implements ICanEat {
    public function eat($food){
        echo 'Human eating';
    }
}

$human1 = new Human();
$human1->eat('apple');
print_r($human1 instanceof Human);