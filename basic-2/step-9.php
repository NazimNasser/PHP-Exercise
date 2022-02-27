<?php
function sqrtNumber($num){
    $x = $num;
    $y = 1;
    while($x > $y)
    {
        $x = ($x + $y)/2;
        $y = $num/$x;
    }
    return $x;
}
echo sqrtNumber(8)."\n";
echo sqrtNumber(25)."\n";
echo sqrtNumber(16)."\n";
?>