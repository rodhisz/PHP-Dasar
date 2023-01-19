<?php
$names = ["Elina", "Hasna", "Zahra"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//pake for each cetak tanpa index
foreach ($names as $name) {
    echo "Data dengan nama : $name" . PHP_EOL;
}

//pake for each cetak dengan index
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

//for each array assosiatif
$person = [
    "first_name" => "Elina",
    "middle_name" => "Hasna",
    "last_name" => "Zahra"
    ];

foreach ($person as $v) {
    echo "nama saya $v" . PHP_EOL;
}
?>
