<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

///to applies function to each element of array
$dataresult = array_map(fn (int $value) => $value * 2, $data);
var_dump($dataresult);

///to sort array in reverse order
rsort($data);
var_dump($data);

$person = [
    "firstname" => "Muhammad",
    "middlename" => "Mufid",
    "lastname" => "Musyaffa",
];

///to return all the keys in the array
var_dump(array_keys($person));

///to return all the values in the array
var_dump(array_values($person));

///read more about array functions in https://www.php.net/manual/en/ref.array.php