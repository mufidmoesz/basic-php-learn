<?php

///to join array into string
echo join(",", [10, 11, 12, 13, 14, 15]) . PHP_EOL;

///to break string into array
var_dump (explode(" ", "Muhammad Mufid Musyaffa"));

///to lowercase the string
var_dump(strtolower("MUHAMMAD MUFID MUSYAFFA"));

///to uppercase the string
var_dump(strtoupper("muhammad mufid musyaffa"));

///to delete whitespace from the front and back of the string
var_dump(trim("     Muhammad Mufid Musyaffa       "));

///to put particular character in the string
var_dump(substr("Muhammad Mufid Musyaffa", 0, 3));

///read more about string functions in https://www.php.net/manual/en/ref.strings.php