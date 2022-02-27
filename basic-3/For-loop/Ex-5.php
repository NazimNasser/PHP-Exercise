<?php 
error_reporting(E_ERROR);
function reverseStr($str){
    $strLength = strlen($str);
    for($i=$strLength; $i>=0; $i--){
        echo $str[$i];
    }
}
$str = "Using a for loop write a PHP programme to reverse a sentence. Without using built in functions";
echo reverseStr($str),"\n";
?>