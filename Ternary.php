<?php
echo "# if else #";
echo "\n";
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi Sis!";
}

echo $hi;

echo "\n";

echo "# ternary #";
echo "\n";

$gender = "FROG";
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi sis!";

// make ternary double condition
echo "\n";

echo "# ternary double condition #";
echo "\n";
$hi = ( $gender == "PRIA" ? "Hi bro!" : ( $gender == "HEWAN" ? "Hi Wan!" : "Hi sis!" ) );

echo $hi . PHP_EOL;
?>
