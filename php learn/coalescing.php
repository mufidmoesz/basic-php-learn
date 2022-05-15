<?php

// $data = [
//     "action" => "create"
// ];

// if (isset($data['action'])) {
//     $action = $data['action'];
// }
// else{
//     $action = "nothing";
// }

// echo $action . PHP_EOL;

$flights = [
    "plane" => "Boeing 747",
    "from" => "Jakarta",
    "to" => "Bandung",
    "departure" => "12:00",
];
$infos = readline("Masukkan informasi yang ingin dicari: ");

if ($infos = $flights[$infos]) {
    echo $infos . PHP_EOL;
}
else {
    echo "Tidak ada informasi yang dicari" . PHP_EOL;
}
