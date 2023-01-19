<?php
//tanpa null coalescing operator
$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action;

//menggunakan null coalescing operator
$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

echo "\n"; 
echo $action . PHP_EOL;
?>
