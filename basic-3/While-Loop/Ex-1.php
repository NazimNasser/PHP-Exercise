<?php
function patternStar($n){
    $x=0;
    while ($x<$n){
        $y=0;
        while($y<=$x){
            $y++;
            echo "*";
        }
        $x++;
        echo "\n";
    }
}
patternStar(8);
echo "\n";
patternStar(5);
?>