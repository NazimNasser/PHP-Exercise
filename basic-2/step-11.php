<?php
function isPrime($num){
    $x=2;
    while($x<$num){
        if($num %$x ==0){
            return 0;
        }else{
            $x++;
        }
    }
    return 1;
}
$a = IsPrime(25);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";

?>