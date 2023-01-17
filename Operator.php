<?php
//Aritmatika
echo "Aritmatika";
echo "\n";
$a = 10;
$b = 10;
 
$result = $a + $b;
var_dump($result);
 
$resultNegative = -$result;
var_dump($resultNegative);
 
$resultPositive = +$result;
var_dump($resultPositive);
 
$resultModulo = 100 % 3;
var_dump($resultModulo);

echo "\n";

//Penugasan
echo "Penugasan";
echo "\n";
$total = 0;
 
$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;
 
$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

echo "\n";

//Perbandingan
echo "Perbandingan";
echo "\n";
var_dump("10" == 10);
var_dump("10" === 10);
 
var_dump(10 < 9);
var_dump(9 >= 9);

echo "\n";

//Logika
echo "Logika";
echo "\n";
var_dump(true && true);
var_dump(true && false);
 
var_dump(true || false);
var_dump(true || true);
 
var_dump(true xor false);
var_dump(true xor true);
 
var_dump(!true);
var_dump(!false);

echo "\n";

//Increment dan decrement
echo "Increment dan Decrement";
echo "\n";
$a = 10;
$b = ++$a;
 
var_dump($a);
var_dump($b);

echo "\n";

//Operator Array
echo "Operator Array";
echo "\n";

$first = [
    "first_name" => "Elina"
];
 
$last = [
    "first_name" => "Nadia",
    "last_name" => "Hasna"
];
 
$full = $first + $last;
var_dump($full);

echo "\n";

//contoh 2
echo "Contoh 2";
echo "\n";
$a = [
    "first_name" => "Elina",
    "last_name" => "Hasna"
  ];
   
  $b = [
    "last_name" => "Hasna",
    "first_name" => "Elina"
  ];
   
  var_dump($a == $b);
  var_dump($a === $b);
?>
