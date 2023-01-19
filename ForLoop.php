<?php
// for (; ;  ) {
//     echo "Hello for looping" . PHP_EOL;
// }

//Kode perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Kode perulangan dengan Init Statement
for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Kode perulangan dengan Post Statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

//Kode perulangan decrement
for ($counter = 10; $counter <= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

//Alternative Syntax
for ($counter = 1; $counter <= 5; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;


for ($counter = 5; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
?>
