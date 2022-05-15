<?php

// for ($start = 1, $counter = readline("masukkan jumlah: ");$start <= $counter;$start++){
//     echo "ini adalah for loop ke-$start" . PHP_EOL;
// }

for ($counter = 0;$counter <= 50;$counter++){
    if ($counter % 2 == 0){
        continue;
    }
    echo "angka genap: $counter" . PHP_EOL;
}