<?php
function factorialNum($num){
    $sum = 1;
    $x = 0;
    while ($x < strlen($num)) {
        $sum*= $num[$x];
        $x++;
    }
    return $sum."\n";
}


echo factorialNum("654321");
echo factorialNum("1851");
echo factorialNum("745278");
echo factorialNum("754");
echo factorialNum("75");
?>