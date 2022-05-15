<?php

// $values = array(18, 16, 20, 34, 67.5);
// var_dump($values);

$names = ["Mufid,", "Wahyu", "Rizki", "Ridho"];
var_dump($names);

$names[2] = "Sultan";

echo $names[1];
echo "\n";
$names[] = "Anton";
var_dump($names);

$profile = [
    "name" => "Mufid",
    "birthdate" => "18 May 2003",
    "age" => 18,
    "address" => "Bandung",
    "hobbies" => ["Gaming", "Reading", "Coding"],
    "gadget" => [
        "phone" => "Realme",
        "computer" => "Lenovo",
        "tablet" => "Samsung"
    ]
];
var_dump($profile);

echo $profile["gadget"]["computer"];