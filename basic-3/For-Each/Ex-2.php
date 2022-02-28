<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
        "id" => 3,
        "name"=> "Omar",
        "email"=> "omar@codi.tech"
    )
);
foreach ($transactions as $key=>$value)
{
    $ID = $transactions[$key]["id"];
    $name = $transactions[$key]["name"];
    $email = $transactions[$key]["email"];
    echo "id: $ID, name: $name, email: $email\n";
}
?>