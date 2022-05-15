<?php

$names = ["Mufid", "Wahyu", "Rizki", "Ridwan", "Rizal"];

///using for loop
for ($i = 0; $i < count($names); $i++){
    echo "Nama : $names[$i]" . PHP_EOL;
}

echo "\n";

///using foreach loop
foreach ($names as $name){
    echo "Nama : $name" . PHP_EOL;
}

$person = [
    "first_name" => "Muhammad",
    "middle_name" => "Mufid",
    "last_name" => "Musyaffa"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}