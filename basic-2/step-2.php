<?php

function greaterFn($num){
  if(30<$num){
    return "$num is greater than 30\n";
  }else if(20<$num){
    return "$num is greater than 20\n";
  }else if(10<$num){
    return "$num is greater than 10\n";
  }else{
      return"$num is less than 10\n";
  }
  
}
echo greaterFn(40); // 40 is greater than 30
echo greaterFn(21); // 21 is greater than 20
echo greaterFn(12); // 12 is greater than 10
echo greaterFn(8);  // 8 is less than 10
?>