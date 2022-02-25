<?php
$str = "Python with PHP\n";
$new = str_replace(array("Python", "PHP"), array("pHP", "python"), $str);
echo str_replace(array("pHP", "python"), array("PHP", "Python"), $new);
?>