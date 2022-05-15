<?php

goto a;
echo "Hello World" . PHP_EOL;

a: 
echo "Goodbye World" . PHP_EOL;

$i = 1;

while (true){
    echo "ini adalah goto loop ke-$i" . PHP_EOL;
    $i++;

    if ($i > 10){
        goto end;
    }
}

end: 
echo "end loop" . PHP_EOL;