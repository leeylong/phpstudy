<?php
/**
 * trait冲突解决
 */

 trait A{
     function saySome(){
         echo 'trait A';
     }

     function runSome(){
         echo 'run traitA';
     }
 }


 trait B{
    function saySome(){
        echo 'trait B';
    }

    function runSome(){
        echo 'run traitB';
    }
}


class Test{
    use A,B{
        B::runSome insteadOf A;
        A::saySome insteadOf B;
    }
}

$obj = new Test();

$obj->saySome();