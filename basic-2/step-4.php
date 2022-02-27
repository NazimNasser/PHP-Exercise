<?php
function armstrongNum($num){
    $total=0;
    $x=$num;
    while($x!=0){
        $rem=$x%10;
        $total=$total+$rem*$rem*$rem;
        $x=$x/10;
    }
    if($num==$total){
        echo "This $num is an Armstrong number\n";
    }else{
        echo "This $num is not an Armstrong number\n";
    }
}
armstrongNum(407);
armstrongNum(55);
armstrongNum(153);
armstrongNum(256);
?>
