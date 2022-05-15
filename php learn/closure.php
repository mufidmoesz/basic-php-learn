<?php

$namefunc = function (string $name){
    echo "konnichiwa $name-kun" . PHP_EOL;
};

$kiminonawa = readline("enter your name: ");
$namefunc($kiminonawa);

function goodbye(string $name, $filter){
    $finalname = $filter($name);
    echo "mata ashita $finalname-kun" . PHP_EOL;
}

$filterfunc = function (string $name){
    return strtoupper($name);
};
goodbye($kiminonawa, $filterfunc);

goodbye($kiminonawa, function (string $name){
    return strtoupper($name);
});

$greet = "ohayou!";

$morning = function () use ($greet, $kiminonawa){
    echo "$greet $kiminonawa-kun" . PHP_EOL;
};

$morning();