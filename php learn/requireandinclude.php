<?php

///require and include is used to include file. PHP solving the programs line by line, 
///so be careful about where you put the include statement, always put the statement above the program.
///to avoid redeclare function error, you can use require_once or include_once
include_once "library/myfunc.php";
include "library/func2.php";


$greet = readline("enter greeting: ");
$kiminonawa = readline("enter your name: ");

echo greeting($greet, $kiminonawa) . PHP_EOL;

$number = readline("enter number: ");
echo factorial($number) . PHP_EOL;