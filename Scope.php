<?php
// Global Scope
$name = "IDN"; // global scope

function sayHello(){
    global $name; // global keyword
    echo $name . PHP_EOL; //error
}

sayHello();

// Local Scope
function createName()
{
    $name1 = "IDN"; // local scope
}

createName();
echo $name1 . PHP_EOL;

// Static Scope
function increment()
{
    $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();

?>
