<?php

/// using for loop function
function factorial(int $value): int{
    $total = 1;

    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

$number = readline("enter number: ");
echo factorial($number) . PHP_EOL;

/// using recursive function
function factorialrecursive(int $value): int{
    if($value == 1){
        return 1;
    }
    else{
        return $value * factorialrecursive($value - 1);
    }
}

echo factorialrecursive($number) . PHP_EOL;

///better not using recursive function if possible because it will cause stack overflow and memory exhaustion