<?php
$num = '54321';
$sum = 0;
for ($x = 0; $x <= strlen($num); $x++) {
    $sum+= $x;
  }
echo $sum;
?>