<?php

$grades = readline("Masukkan nilai: ");

switch (strtoupper($grades)) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "D":
        echo "Anda lulus dengan cukup" . PHP_EOL;
        break;
    default:
        echo "Anda tidak lulus" . PHP_EOL;
        break;
}