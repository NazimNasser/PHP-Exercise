<?php
function sumNum($num){
    $sum = 0;
    for ($x = 0;$x < strlen($num);$x++) {
        $sum+= $num[$x];
    }
    return $sum."\n";
}


echo sumNum("654321");
echo sumNum("9999");
echo sumNum("745278");
echo sumNum("12345");
echo sumNum("75");
?>