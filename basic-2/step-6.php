<?php
function sumDigitsNum($num){
  $sum = 0;
  for ($x = 0; $x < strlen($num); $x++) {
      $sum+= $num[$x];
    }
  return $sum."\n";
  }


echo sumDigitsNum("54321");
echo sumDigitsNum("1851");
echo sumDigitsNum("745278");
echo sumDigitsNum("754");
echo sumDigitsNum("75");
?>