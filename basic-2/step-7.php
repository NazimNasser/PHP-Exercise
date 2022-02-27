<?php
function replaceWord($str){
    $new = str_replace(array("Python", "PHP"), array("pHP", "python"), $str);
    echo str_replace(array("pHP", "python"), array("PHP", "Python"), $new);
}
replaceWord("Replace a string Python with PHP and PHP with  Python in a given string\n");
?>