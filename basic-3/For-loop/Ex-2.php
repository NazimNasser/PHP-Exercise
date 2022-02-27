<?php
function checkIfParallelogram($length, $width, $diagonal){
    $rec = 0;
    $dia = 0;   
        if ($length * $length + $width * $width === $diagonal * $diagonal) {
            $rec++;
        }
        if ($length === $width) {
            $dia++;
        } 
    if ($rec>0)
    echo "This is rectangle.\n";
    if ($dia>0)
    echo "This is rhombus.\n";
}
checkIfParallelogram(3, 4, 5);
checkIfParallelogram(5, 5, 8);
?>