<?php

function factorial(int $value): int{
    $total = 1;

    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}