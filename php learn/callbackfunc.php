<?php

function greeting(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "ohayou $finalname" . PHP_EOL;
}

$kiminonawa = readline("enter your name: ");

greeting($kiminonawa, fn (string $name) => strtoupper($name));