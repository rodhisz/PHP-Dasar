<?php
//if else
echo "#if else#";
echo "\n";

$nilai = 50;
$absen = 75;

if ($nilai >= 70 && $absen >= 70) {
    echo "Anda lulus" . PHP_EOL;
} else {
    echo "Anda Tidak lulus" . PHP_EOL;
}

echo "\n";

//if else if else
echo "#if else if else#";
echo "\n";

$nilai = 60;
$absen = 60;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

echo "\n";

echo "#if else if else 2#";
echo "\n";

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
?>
