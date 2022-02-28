<?php
function personal_details($array){
    foreach ( $array as $key => $value ){
    echo "$key=$value\n";
    }
}
$array = array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");
personal_details($array);
?>