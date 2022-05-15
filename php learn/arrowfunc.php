<?php

$greet = readline("enter greetings: ");
$name = readline("enter name: ");
$back = readline("enter back: ");

$sayhello = fn () => "$greet $name-$back";
echo $sayhello();