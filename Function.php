<?php
//membuat function
function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

//mencetak function
sayHello();
sayHello();

echo "\n";
// function argument
function sayHello2($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello2("Iyal");
sayHello2("Fauzi");

// function argument lebih dari satu
function sayHello3($firstName, $lastName)
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}
sayHello3("Hasna", "Fauzi");
sayHello3("Hafsah", "Fauzi");

// function default argument 
function sayHello4($name = "empty")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello4();

// text declearation
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

// function return value
function sum2(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}
sum2(10, 10); //klo dipanggil langsung dia ga jalan

$result = sum2(100, 100);
var_dump($result); //function dengan return value harus dengan variable

// variable function
function satu(){
    echo "ini satu" . PHP_EOL;
}

function dua(){
    echo "ini dua" . PHP_EOL;
}

$functionYangAkanDipanggil = "satu";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "dua";
$functionYangAkanDipanggil();

satu();
dua();

// Function build in

//date()
//untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set("Asia/jakarta") . PHP_EOL;

//untuk menampilkan waktu (hari, tanggal bulan tahun)
echo date("l, d M Y z") . PHP_EOL;
echo date("H:i:s") . PHP_EOL;

//detik
//detik yg sudah berlalu sejak 1 januari 1970
echo time() . PHP_EOL;
	
//menghitung 1000 hari kedepan
echo date("l, d M Y", time()+60*60*24*1000) . PHP_EOL;

//strtotime
//string to time
date_default_timezone_set("Asia/jakarta") . PHP_EOL;
echo date("l", strtotime("24 aug 2002")) . PHP_EOL;
?>

