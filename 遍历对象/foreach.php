<?php
/**
 * 循环输出变量属性
 */

 class Car{
     private $brand = '';
     private $price = '';
     protected $motor = '';
     protected $color = '';
     public $tire = 4;
     public $abd = 'abc';

     function __set($var,$val){
        $this->$var = $val;
     }
     function run(){
         echo 'run now';
     }

 }

 $bmw = new Car();
 $bmw->brand = 'bmw';
 $bmw->price = '100w';
 $bmw->motor = 'ger';
 $bmw->color = 'red';

// print_r($bmw);

foreach($bmw as $key => $val){
    echo 'key=>val:'.$key.':'.$val.'<br />';
}