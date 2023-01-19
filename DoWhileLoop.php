<?php
//kondisi = true
//ini do while
$counter = 1;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter == -1);

echo "\n";
echo "ini while";
echo "\n";
//ini while
$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
};

//kondisi = false
$counter = 100;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
?>

