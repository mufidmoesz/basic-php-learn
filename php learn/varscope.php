<?php

$name = "Mufid"; ///global scope variable, can only accessed from outside function

function callname(){
    global $name; ///global keyword is used to access global variable from inside function
    echo $name . PHP_EOL;
}
callname();

function yourname(){
    $namefunc = "Wahyu"; ///local scope variable, cannot be accessed from outside function
    echo $namefunc . PHP_EOL;
    echo $GLOBALS['name'] . PHP_EOL;///every global scope variable which made are saved in $GLOBALS array, you can use $GLOBALS to access it
}

yourname();

function increment(){
    static $number = 1; ///static keyword is used to make variable static, it will not change after the function is called
    $number++;
    echo $number . PHP_EOL;
}

increment();
increment();
increment();
///by default every local variable is destroyed after the function is called, by using static keyword, 
///you can keep the variable after the function is called