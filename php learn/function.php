<?php

// function sayhello($name){
//     echo "Hello $name" . PHP_EOL;
// }

// $names = ["Mufid", "Wahyu", "Rizki", "Ridwan", "Rizal"];

// foreach ($names as $name){
//     sayhello($name);
// }

function sum(int $first, int $second){
    return $first + $second;
}

$number1 = readline("Masukkan angka pertama: ");
$number2 = readline("Masukkan angka kedua: ");

$total = sum($number1, $number2);
echo "$number1 + $number2 = $total" . PHP_EOL;


// function sumAll(...$values){
//     $total = 0;
//     foreach ($values as $value){
//         $total += $value;
//     }
//     echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;
// }

// sumAll(4, 6, 9, 10, 14);