<?php
function check_palindrome($str){
    if($str === strrev($str)) return "Yes, {$str} is a palindrome";
    else return "No, {$str} is not a palindrome";
}
echo check_palindrome("madam"), "\n";
echo check_palindrome("nurses"), "\n";
?>