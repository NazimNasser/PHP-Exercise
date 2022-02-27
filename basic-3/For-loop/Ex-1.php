<?php
function factorialNum($num){
    $sum = 0;
    for ($x = 0;$x < strlen($num);$x++) {
        $sum+= $num[$x];
    }
    return $sum."\n";
}


echo factorialNum("654321");
echo factorialNum("9999");
echo factorialNum("745278");
echo factorialNum("12345");
echo factorialNum("75");
?>