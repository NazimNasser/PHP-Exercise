<?php
$birth_year = 1999;
$current_year = 2022;
$age = $current_year - $birth_year;
if ($age < 18) {
    echo "You still a kid, go and play GTA\n";
  } else {
    echo "You can drive\n";
  }
?>