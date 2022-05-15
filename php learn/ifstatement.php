<?php

$name = readline("Masukkan nama: ");
$score = readline("Masukkan nilai: ");
$absen = readline("Masukkan nilai absen: ");

if ($score >= 80 && $absen >= 80) {
    echo "Nilai $name adalah A" . PHP_EOL;
} 
else if ($score >= 70 && $absen >= 70) {
    echo "Nilai $name adalah B" . PHP_EOL; 
}
else if ($score >= 60 && $absen >= 60) {
    echo "Nilai $name adalah C" . PHP_EOL;
}
else if ($score >= 50 && $absen >= 50) {
    echo "Nilai $name adalah D" . PHP_EOL;
}
else {
    echo "Nilai $name adalah E" . PHP_EOL;
}