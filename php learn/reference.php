<?php

///reference is used to refer some variable to another variable
$name = "Mufid";

$othername = &$name;
$othername = "Wahyu";

echo $name . PHP_EOL;

function increment(int &$number){
    return $number++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

function &getReference(){
    static $number = 100;
    return $number;
}

///this is is a returning reference function, so you can change the variable inside the function by refering it
///better to not use it if not neccesarry because it will cause confusion in your code 
$a = &getReference();
$a = 200;

$b = &getReference();
echo $b . PHP_EOL;