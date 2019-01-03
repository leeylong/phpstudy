<?php
/**
 * @author lee
 * 2019-12-02
 * trait测试
 */

 trait exampleTrait{
     function sayHello(){
        echo 'im trait01';
     }

     function run(){
         echo 'trait ran.';
     }
 }

 class exampleClass{
     function sayHello(){
         echo 'im class1';
     }
 }

 class exampleSon extends exampleClass{
    use exampleTrait;

    function sayHello(){
        echo 'im sonClass';
    }
 }

$obj = new exampleSon();

$obj->sayHello();























