<?php
function swapTwoVar($var1, $var2){
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
    echo "\nThe number after swapping is: \n","Number var1 =".$var1." and var2=".$var2."\n";
}
swapTwoVar(32, 45);
?>