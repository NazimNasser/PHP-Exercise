<?php
$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

foreach ($transactions as $key=>$value)
{
    $amount = abs($transactions[$key]["debit"] - $transactions[$key]["credit"]);
    $ID = $transactions[$key]["id"];
    echo "ID: $ID => amount: $amount\n";
}
?>
