<?php
for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "\n";
}
for ($i=1; $i <= 5; $i++) { 
    for ($j=5; $j >= $i; $j--) { 
        echo "*";
    }
    echo "\n";
}
?>