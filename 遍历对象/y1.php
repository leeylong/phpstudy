<?php

$a = 100;
$b = 50;

function sum1(&$a,&$b){
    echo $a+$b;
    $a++;$b++;
    echo '<br>';
}

sum1($a,$b);

print_r($a.'---'.$b);