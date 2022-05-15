<?php

$gender = readline("Masukkan gender : ");
$greet = strtoupper($gender) == "MALE" ? "Yo whatsup bro!" : "Sup' bitch!";

echo $greet . PHP_EOL;