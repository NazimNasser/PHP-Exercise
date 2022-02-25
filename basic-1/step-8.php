<?php
// step 8-a
$item = array("Eggs", "Milk", "Cheese", "Water", "Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have $item[0], $item[1], and $item[2]? Also if you sell fruits can I find a $item[6]\n?";

// step 8-b
$items = array (
    array( 'balade', 'mazere3' ),
    array('Fresh', 'Taanayel'),
    array( 'Tanoureen', 'Reem')
);
echo "Hey Sir, Please I need 1 pack of ".$items[0][0]." eggs and 3 ".$items[2][1]." Water Pack\n";
?>